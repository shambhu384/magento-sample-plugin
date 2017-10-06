-- Magento Sample plugin

clone this repo in app\code directory

mv magento-sample-plugin/* .
rm -rf magento-sample-plugin

use pestle for code templates to avoid namespace or pattern mistakes


php bin/magento module:status

php bin/magento module:enable Vendor_App

bin/magento setup:upgrade

http://localhost/magento/vendor_app/index/index
