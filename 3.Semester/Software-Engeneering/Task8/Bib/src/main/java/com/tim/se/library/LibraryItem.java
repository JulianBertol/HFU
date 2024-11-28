package com.tim.se.library;

import lombok.Getter;

import java.util.Date;

@Getter
public class LibraryItem {

	private String uniqueIdentifier;
	private int totalCount;
	private Date createdAt;
	private Date removedAt;
	private int conditionScore;
	public Medium medium;

	LibraryItem(Medium medium, String id){
		this.uniqueIdentifier = id;
		this.medium = medium;
	}

	public int getAvailableCount() {
		// TODO - implement LibraryItem.getAvailableCount
		throw new UnsupportedOperationException();
	}

	public Order[] getOrders() {
		// TODO - implement LibraryItem.getOrders
		throw new UnsupportedOperationException();
	}

	public int getPreorderCount() {
		// TODO - implement LibraryItem.getPreorderCount
		throw new UnsupportedOperationException();
	}

	/**
	 * 
	 * @param order
	 */
	public void addToOrder(Order order) {
		// TODO - implement LibraryItem.addToOrder
		throw new UnsupportedOperationException();
	}

}