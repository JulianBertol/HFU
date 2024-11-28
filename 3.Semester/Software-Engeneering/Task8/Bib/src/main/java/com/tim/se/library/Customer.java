package com.tim.se.library;

import java.util.ArrayList;
import java.util.List;

public class Customer {

	private String firstName;
	private String lastName;
	private int age;
	private String faculty;
	private String email;
	private int score;
	private List<Order> orders;
	public Customer(String firstName, String lastName, int age, String faculty, String email, int score) {
		this.firstName = firstName;
		this.lastName = lastName;
		this.age = age;
		this.faculty = faculty;
		this.email = email;
		this.score = score;
		this.orders = new ArrayList<>();
	}

	public Order[] getOrders() {
		return orders.toArray(Order[]::new);
	}

	/**
	 * 
	 * @param order
	 */
	public void addOrder(Order order) {
		System.out.println("Added order with " + order.getItems().length + " items to customer " + this.firstName);
		this.orders.add(order);
	}

	public int getTotalOverdrawnDays() {
		// TODO - implement Customer.getTotalOverdrawnDays
		throw new UnsupportedOperationException();
	}

	public int getDefectedItemCount() {
		// TODO - implement Customer.getDefectedItemCount
		throw new UnsupportedOperationException();
	}

	public boolean shouldReject() {
		// TODO - implement Customer.shouldReject
		throw new UnsupportedOperationException();
	}

}