package com.tim.se.library;

import lombok.Getter;
import lombok.Setter;

import java.util.Arrays;
import java.util.NoSuchElementException;
import java.util.Objects;
import java.util.Optional;

@Setter
@Getter
public class Library {

	private Customer[] customers;
	private LibraryItem[] items;
	private User[] users;

	public Library(Customer[] customers, LibraryItem[] items) {
		this.customers = customers;
		this.items = items;
	}

	public LibraryItem get_item(String name){
		for (int i = 0; i < this.items.length ; i++) {
			if (Objects.equals(this.items[i].medium.name, name)) {
				return items[i];
			}
		}
		throw new NoSuchElementException("Fuck you");
		
	}

	public Customer[] getCustomers(){
		return this.customers;
	}
}