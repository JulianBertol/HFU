package com.tim.se.library;

import lombok.Getter;

import java.util.Date;

@Getter
public class Medium {

	public String name;
	private Date creationDate;
	private String summary;
	private Category category;

	public Medium(String name) {
		this.name = name;
	}


	public void orderNew(int amount) {
		// TODO - implement Medium.orderNew
		throw new UnsupportedOperationException();
	}

}