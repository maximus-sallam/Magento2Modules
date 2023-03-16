# Magento 2 DeleteAdminUserCommand module

A module for Magento 2 that allows you to delete admin users from the command line.

Tested with Magento 2.4.5-p1 Community Edition on Nexcess Magento hosting.

Installation:

Move the "MaximusSallam" directory into the "app/code" directory, then perform the following:
```
$ php bin/magento module:enable MaximusSallam_DeleteAdminUserCommand
$ php bin/magento setup:upgrade
$ php bin/magento cache:clean
```
Usage:
```
$ php bin/magento admin:user:delete <admin_username>
```
Example: 
```
$ php bin/magento admin:user:delete test_user
Admin user 'test_user' has been deleted.
```


# Magento 2 InfoModule extension

An extension to the module for Magento 2 that displays critical Magento 2 information from the command line.

Installation:

Move the "MaximusSallam" directory into the "app/code" directory, then perform the following:
```
$ php bin/magento module:enable MaximusSallam_InfoModule
$ php bin/magento setup:upgrade
$ php bin/magento cache:clean
```
Usage:
```
$ php bin/magento info:display
```
Example: 
```
$ php bin/magento info:display
Path              : /chroot/home/<REDACTED>/html
Type              : Community
Install Date      : Thu, 09 Mar 2023 02:08:46 +0000
Version           : 2.4.5-p1
Base URL          : https://<REDACTED>/
Admin URL         : https://<REDACTED>/
SKU Count         : Information not available
Return-Path Email : Information not available
Permissions       : Files Information not available | Directories Information not available
Logging           : Information not available
Cache Status      : Disabled
Deploy mode       : default
Database          :
 - Host           : localhost
 - Port           : default
 - Name           : <REDACTED>
 - User           : <REDACTED>
 - Password       : <REDACTED>
Session Method    : files
Cache Method      : files
Elasticsearch     : :/magento2
Varnish           : Information not available
Modules           : Magento_Store, Magento_AdminAnalytics, Magento_AdminNotification, Magento_AdobeIms, Magento_AdobeImsApi, Magento_AdobeStockAdminUi, Magento_MediaGallery, Magento_AdobeStockAssetApi, Magento_AdobeStockClient, Magento_AdobeStockClientApi, Magento_AdobeStockImage, Magento_Directory, Magento_AdobeStockImageApi, Magento_AdvancedPricingImportExport, Magento_Theme, Magento_Amqp, Magento_Config, Magento_Backend, Magento_Authorization, Magento_Eav, Magento_Customer, Magento_User, Magento_Backup, Magento_Indexer, Magento_GraphQl, Magento_BundleImportExport, Magento_CacheInvalidate, Magento_Variable, Magento_Cms, Magento_Rule, Magento_Security, Magento_CmsGraphQl, Magento_EavGraphQl, Magento_Search, Magento_CatalogImportExport, Magento_Catalog, Magento_CatalogInventory, Magento_CatalogPageBuilderAnalytics, Magento_CatalogRule, Magento_Msrp, Magento_CatalogRuleGraphQl, Magento_CatalogSearch, Magento_CatalogUrlRewrite, Magento_StoreGraphQl, Magento_MediaStorage, Magento_Quote, Magento_SalesSequence, Magento_CheckoutAgreementsGraphQl, Magento_MediaGalleryUi, Magento_CatalogGraphQl, Magento_CmsPageBuilderAnalytics, Magento_CmsUrlRewrite, Magento_CmsUrlRewriteGraphQl, Magento_CompareListGraphQl, Magento_Integration, Magento_Payment, Magento_Sales, Magento_QuoteGraphQl, Magento_Checkout, Magento_Contact, Magento_Cookie, Magento_Cron, Magento_Csp, Magento_Widget, Magento_Robots, Magento_Analytics, Magento_Downloadable, Magento_CustomerGraphQl, Magento_CustomerImportExport, Magento_Deploy, Magento_Developer, Magento_Dhl, Magento_AdvancedSearch, Magento_DirectoryGraphQl, Magento_DownloadableGraphQl, Magento_CustomerDownloadableGraphQl, Magento_ImportExport, Magento_Bundle, Magento_CatalogCustomerGraphQl, Magento_Elasticsearch, Magento_Elasticsearch6, Magento_Elasticsearch7, Magento_Email, Magento_EncryptionKey, Magento_Fedex, Magento_GiftMessage, Magento_GiftMessageGraphQl, Magento_GoogleAdwords, Magento_GoogleAnalytics, Magento_GoogleGtag, Magento_Ui, Magento_GoogleShoppingAds, Magento_BundleGraphQl, Magento_PageCache, Magento_GroupedProduct, Magento_GroupedImportExport, Magento_GroupedCatalogInventory, Magento_GroupedProductGraphQl, Magento_DownloadableImportExport, Magento_Captcha, Magento_InstantPurchase, Magento_CatalogAnalytics, Magento_Inventory, Magento_InventoryAdminUi, Magento_InventoryAdvancedCheckout, Magento_InventoryApi, Magento_InventoryBundleImportExport, Magento_InventoryBundleProduct, Magento_InventoryBundleProductAdminUi, Magento_InventoryBundleProductIndexer, Magento_InventoryCatalog, Magento_InventorySales, Magento_InventoryCatalogAdminUi, Magento_InventoryCatalogApi, Magento_InventoryCatalogFrontendUi, Magento_InventoryCatalogSearch, Magento_InventoryCatalogSearchBundleProduct, Magento_InventoryCatalogSearchConfigurableProduct, Magento_ConfigurableProduct, Magento_ConfigurableProductGraphQl, Magento_InventoryConfigurableProduct, Magento_InventoryConfigurableProductIndexer, Magento_InventoryConfiguration, Magento_InventoryConfigurationApi, Magento_InventoryDistanceBasedSourceSelection, Magento_InventoryDistanceBasedSourceSelectionAdminUi, Magento_InventoryDistanceBasedSourceSelectionApi, Magento_InventoryElasticsearch, Magento_InventoryExportStockApi, Magento_InventoryIndexer, Magento_InventorySalesApi, Magento_InventoryGroupedProduct, Magento_InventoryGroupedProductAdminUi, Magento_InventoryGroupedProductIndexer, Magento_InventoryImportExport, Magento_InventoryInStorePickupApi, Magento_InventoryInStorePickupAdminUi, Magento_InventorySourceSelectionApi, Magento_InventoryInStorePickup, Magento_InventoryInStorePickupGraphQl, Magento_Shipping, Magento_InventoryInStorePickupShippingApi, Magento_InventoryInStorePickupQuoteGraphQl, Magento_InventoryInStorePickupSales, Magento_InventoryInStorePickupSalesApi, Magento_InventoryInStorePickupQuote, Magento_InventoryInStorePickupShipping, Magento_InventoryInStorePickupShippingAdminUi, Magento_Multishipping, Magento_Webapi, Magento_InventoryCache, Magento_InventoryLowQuantityNotification, Magento_Reports, Magento_InventoryLowQuantityNotificationApi, Magento_InventoryMultiDimensionalIndexerApi, Magento_InventoryProductAlert, Magento_InventoryQuoteGraphQl, Magento_InventoryRequisitionList, Magento_InventoryReservations, Magento_InventoryReservationCli, Magento_InventoryReservationsApi, Magento_InventoryExportStock, Magento_InventorySalesAdminUi, Magento_CatalogInventoryGraphQl, Magento_InventorySalesFrontendUi, Magento_InventorySetupFixtureGenerator, Magento_InventoryShipping, Magento_InventoryShippingAdminUi, Magento_InventorySourceDeductionApi, Magento_InventorySourceSelection, Magento_InventoryInStorePickupFrontend, Magento_InventorySwatchesFrontendUi, Magento_InventoryVisualMerchandiser, Magento_InventoryWishlist, Magento_JwtFrameworkAdapter, Magento_JwtUserToken, Magento_LayeredNavigation, Magento_LoginAsCustomer, Magento_LoginAsCustomerAdminUi, Magento_LoginAsCustomerApi, Magento_LoginAsCustomerAssistance, Magento_LoginAsCustomerFrontendUi, Magento_LoginAsCustomerGraphQl, Magento_LoginAsCustomerLog, Magento_LoginAsCustomerPageCache, Magento_LoginAsCustomerQuote, Magento_LoginAsCustomerSales, Magento_Marketplace, Magento_MediaContent, Magento_MediaContentApi, Magento_MediaContentCatalog, Magento_MediaContentCms, Magento_MediaContentSynchronization, Magento_MediaContentSynchronizationApi, Magento_MediaContentSynchronizationCatalog, Magento_MediaContentSynchronizationCms, Magento_AdobeStockAsset, Magento_MediaGalleryApi, Magento_MediaGalleryCatalog, Magento_MediaGalleryCatalogIntegration, Magento_MediaGalleryCatalogUi, Magento_MediaGalleryCmsUi, Magento_MediaGalleryIntegration, Magento_MediaGalleryMetadata, Magento_MediaGalleryMetadataApi, Magento_MediaGalleryRenditions, Magento_MediaGalleryRenditionsApi, Magento_MediaGallerySynchronization, Magento_MediaGallerySynchronizationApi, Magento_MediaGallerySynchronizationMetadata, Magento_AdobeStockImageAdminUi, Magento_MediaGalleryUiApi, Magento_CatalogWidget, Magento_MessageQueue, Magento_ConfigurableImportExport, Magento_MsrpConfigurableProduct, Magento_MsrpGroupedProduct, Magento_InventoryInStorePickupMultishipping, Magento_MysqlMq, Magento_NewRelicReporting, Magento_Newsletter, Magento_NewsletterGraphQl, Magento_OfflinePayments, Magento_SalesRule, Magento_Sitemap, Magento_PageBuilder, Magento_PageBuilderAnalytics, Magento_GraphQlCache, Magento_CardinalCommerce, Magento_PaymentGraphQl, Magento_Vault, Magento_Paypal, Magento_PaypalGraphQl, Magento_Persistent, Magento_ProductAlert, Magento_ProductVideo, Magento_CheckoutAgreements, Magento_QuoteAnalytics, Magento_QuoteBundleOptions, Magento_QuoteConfigurableOptions, Magento_QuoteDownloadableLinks, Magento_InventoryConfigurableProductAdminUi, Magento_ReCaptchaAdminUi, Magento_ReCaptchaCheckout, Magento_ReCaptchaCheckoutSalesRule, Magento_ReCaptchaContact, Magento_ReCaptchaCustomer, Magento_ReCaptchaFrontendUi, Magento_ReCaptchaMigration, Magento_ReCaptchaNewsletter, Magento_ReCaptchaPaypal, Magento_ReCaptchaReview, Magento_ReCaptchaSendFriend, Magento_ReCaptchaStorePickup, Magento_ReCaptchaUi, Magento_ReCaptchaUser, Magento_ReCaptchaValidation, Magento_ReCaptchaValidationApi, Magento_ReCaptchaVersion2Checkbox, Magento_ReCaptchaVersion2Invisible, Magento_ReCaptchaVersion3Invisible, Magento_ReCaptchaWebapiApi, Magento_ReCaptchaWebapiGraphQl, Magento_ReCaptchaWebapiRest, Magento_ReCaptchaWebapiUi, Magento_RelatedProductGraphQl, Magento_ReleaseNotification, Magento_RemoteStorage, Magento_InventoryLowQuantityNotificationAdminUi, Magento_RequireJs, Magento_Review, Magento_ReviewAnalytics, Magento_ReviewGraphQl, Magento_AwsS3, Magento_Rss, Magento_PageBuilderAdminAnalytics, Magento_CatalogRuleConfigurable, Magento_SalesAnalytics, Magento_SalesGraphQl, Magento_SalesInventory, Magento_OfflineShipping, Magento_ConfigurableProductSales, Magento_UrlRewrite, Magento_UrlRewriteGraphQl, Magento_CustomerAnalytics, Magento_Securitytxt, Magento_SendFriend, Magento_SendFriendGraphQl, Magento_InventoryInStorePickupSalesAdminUi, Magento_AwsS3PageBuilder, Magento_InventoryGraphQl, Magento_CatalogCmsGraphQl, Magento_Swagger, Magento_SwaggerWebapi, Magento_SwaggerWebapiAsync, Magento_Swatches, Magento_SwatchesGraphQl, Magento_SwatchesLayeredNavigation, Magento_Tax, Magento_TaxGraphQl, Magento_TaxImportExport, Magento_AsynchronousOperations, Magento_ThemeGraphQl, Magento_Translation, Magento_TwoFactorAuth, Magento_GoogleOptimizer, Magento_Ups, Magento_SampleData, Magento_CatalogUrlRewriteGraphQl, Magento_AdminAdobeIms, Magento_Usps, Magento_InventoryConfigurableProductFrontendUi, Magento_PaypalCaptcha, Magento_VaultGraphQl, Magento_Version, Magento_InventoryInStorePickupWebapiExtension, Magento_WebapiAsync, Magento_WebapiSecurity, Magento_Weee, Magento_WeeeGraphQl, Magento_CurrencySymbol, Magento_Wishlist, Magento_WishlistAnalytics, Magento_WishlistGraphQl, MaximusSallam_DeleteAdminUserCommand, MaximusSallam_InfoModule, PayPal_Braintree, PayPal_BraintreeGraphQl, Temando_ShippingRemover
```
