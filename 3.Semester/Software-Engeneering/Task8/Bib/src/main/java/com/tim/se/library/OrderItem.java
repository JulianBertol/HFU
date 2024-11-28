package com.tim.se.library;

import java.util.Date;

public class OrderItem {

	private Date createdAt;
	private Date startDate;
	private Date endDate;
	private int totalFee;
	private LibraryItem libraryItem;

	public OrderItem(Date startDate, Date endDate, LibraryItem libraryItem) {
		this.startDate = startDate;
		this.endDate = endDate;
		this.libraryItem = libraryItem;
	}

	/**
	 * 
	 * @param endDate
	 */

	public void extend(Date endDate) {
		// TODO - implement OrderItem.extend
		throw new UnsupportedOperationException();
	}

	public void returnItem() {
		// TODO - implement OrderItem.returnItem
		throw new UnsupportedOperationException();
	}

	public Extension[] getExtensions() {
		// TODO - implement OrderItem.getExtensions
		throw new UnsupportedOperationException();
	}

	public Defect[] getDefects() {
		// TODO - implement OrderItem.getDefects
		throw new UnsupportedOperationException();
	}

}