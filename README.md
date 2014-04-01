# MobWeb_OrderStatusUpdateOnShipment extension for Magento

This extension automatically updates an order's state and status once a shipment has been created for it.

All you have to do to make it work is to update the status code in line 13 in the `Observer.php` file. It is set to `shipped` by default. If your desired status has another code, update that value.

## Installation

Install using [colinmollenhour/modman](https://github.com/colinmollenhour/modman/).

## Questions? Need help?

Most of my repositories posted here are projects created for customization requests for clients, so they probably aren't very well documented and the code isn't always 100% flexible. If you have a question or are confused about how something is supposed to work, feel free to get in touch and I'll try and help: [info@mobweb.ch](mailto:info@mobweb.ch).