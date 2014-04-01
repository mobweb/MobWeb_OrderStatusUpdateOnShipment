<?php

class MobWeb_OrderStatusUpdateOnShipment_Model_Observer
{
	public function salesOrderShipmentSaveAfter($observer)
	{
		// Get the order
		$order = $observer->getEvent()->getShipment()->getOrder();

		// Only continue if the order's current state isn't "Complete"
		if(($state = $order->getState()) && $state !== Mage_Sales_Model_Order::STATE_COMPLETE) {
			// Set the order to the desired state & status (code)
			$order->setState(Mage_Sales_Model_Order::STATE_PROCESSING, 'shipped', 'Order status updated automatically');

			// Save the order
			$order->save();
		}
	}
}