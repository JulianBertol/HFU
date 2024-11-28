package com.tim.se.library;

import java.util.Date;
import java.util.List;

public class Order {

	private Date createdAt;
	private Date startDate;
	private Date endDate;
	private int overdrawnDays;
	private int totalFee;
	private List<OrderItem> oderitems;

	public Order(Date startDate, Date endDate, List<OrderItem> oderitems) {
		this.startDate = startDate;
		this.endDate = endDate;
		this.oderitems = oderitems;
	}

	public OrderItem[] getItems() {
		return this.oderitems.toArray(OrderItem[]::new);
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