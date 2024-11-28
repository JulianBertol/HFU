package com.tim.se.library;

public class Order {

	private Date createdAt;
	private Date startDate;
	private Date endDate;
	private int overdrawnDays;
	private int totalFee;

	public OrderItem[] getItems() {
		// TODO - implement Order.getItems
		throw new UnsupportedOperationException();
	}

	public int getDefectedItemsCount() {
		// TODO - implement Order.getDefectedItemsCount
		throw new UnsupportedOperationException();
	}

	public int getExtensionCount() {
		// TODO - implement Order.getExtensionCount
		throw new UnsupportedOperationException();
	}

	/**
	 * 
	 * @param items
	 */
	public void returnItems(OrderItem[] items) {
		// TODO - implement Order.returnItems
		throw new UnsupportedOperationException();
	}

	public boolean isPreorder() {
		// TODO - implement Order.isPreorder
		throw new UnsupportedOperationException();
	}

}