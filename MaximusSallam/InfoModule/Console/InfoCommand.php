<?php
namespace MaximusSallam\InfoModule\Console;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Magento\Framework\App\DeploymentConfig;
use Magento\Framework\App\Filesystem\DirectoryList;
use Magento\Framework\App\ProductMetadataInterface;
use Magento\Framework\App\State;
use Magento\Store\Model\StoreManagerInterface;

class InfoCommand extends Command
{
    protected $deploymentConfig;
    protected $directoryList;
    protected $state;
    protected $storeManager;
    protected $metadata;

    public function __construct(
        DeploymentConfig $deploymentConfig,
        DirectoryList $directoryList,
        State $state,
        StoreManagerInterface $storeManager,
        ProductMetadataInterface $metadata
    ) {
        $this->deploymentConfig = $deploymentConfig;
        $this->directoryList = $directoryList;
        $this->state = $state;
        $this->storeManager = $storeManager;
        $this->metadata = $metadata;
        parent::__construct();
    }

    protected function configure()
    {
        $this->setName('info:display')
            ->setDescription('Display Magento 2 system information');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        // Your custom logic to retrieve the necessary information
        $dbConfig = $this->deploymentConfig->get('db/connection/default');
	$installDate = $this->deploymentConfig->get('install/date');
	$cacheConfig = $this->deploymentConfig->get('cache');
	$sessionConfig = $this->deploymentConfig->get('session');

	$baseUrl = $this->storeManager->getStore()->getBaseUrl();
	$adminUrl = $this->storeManager->getStore()->getBaseUrl() . $this->deploymentConfig->get('admin/url/custom');
	$modules = $this->deploymentConfig->get('modules');
	$modulesList = implode(', ', array_keys($modules));
	
        // Display the information in the desired format
        $output->writeln("Path              : " . $this->directoryList->getRoot());
	$output->writeln("Type              : " . $this->metadata->getEdition());
	$output->writeln("Install Date      : " . $installDate);
	$output->writeln("Version           : " . $this->metadata->getVersion());
	$output->writeln("Base URL          : " . $baseUrl);
	$output->writeln("Admin URL         : " . $adminUrl);
	$output->writeln("SKU Count         : Information not available"); // Hardcoded, fetch from the product collection if needed
	$output->writeln("Return-Path Email : Information not available"); // Hardcoded, fetch from the store config if needed
	$output->writeln("Permissions       : Files Information not available | Directories Information not available"); // Hardcoded, adjust if needed
	$output->writeln("Logging           : Information not available"); // Hardcoded, adjust if needed
	$output->writeln("Cache Status      : " . ($cacheConfig['frontend'] === 'Cm_Cache_Backend_File' ? 'Enabled' : 'Disabled'));
	$output->writeln("Deploy mode       : " . $this->state->getMode());
	$output->writeln("Database          :");
	$output->writeln(" - Host           : " . $dbConfig['host']);
	$port = isset($dbConfig['port']) ? $dbConfig['port'] : 'default';
	$output->writeln(" - Port           : " . $port);
	$output->writeln(" - Name           : " . $dbConfig['dbname']);
	$output->writeln(" - User           : " . $dbConfig['username']);
	$output->writeln(" - Password       : " . $dbConfig['password']);
	$output->writeln("Session Method    : " . $sessionConfig['save']);
	$cacheMethod = 'files';
	if (isset($cacheConfig['frontend']['default']['backend']) && $cacheConfig['frontend']['default']['backend'] === 'Cm_Cache_Backend_Redis') {
	    $cacheMethod = 'redis';
	}
	$output->writeln("Cache Method      : " . $cacheMethod);
	$output->writeln("Elasticsearch     : " . $this->deploymentConfig->get('system/default/catalog/search/elasticsearch7_server_hostname') . ':' . $this->deploymentConfig->get('system/default/catalog/search/elasticsearch7_server_port') . '/magento2'); // Update this line if you use a different Elasticsearch version
	$output->writeln("Varnish           : Information not available"); // Hardcoded, adjust if needed
	$output->writeln("Modules           : " . $modulesList);
    }
}
