package hello;

import javax.persistence.Entity;
import javax.persistence.GeneratedValue;
import javax.persistence.GenerationType;
import javax.persistence.Id;

@Entity
public class Customer{

	@Id
	@GeneratedValue(strategy=GenerationType.AUTO)
	private Long id;
	private String firstName;
	private String lastName;
	private int age;

	protected Customer() {}

	public Customer(String f, String l, int a) {
		this.firstName = f;
		this.lastName = l;
		this.age = a;
	}

	@Override
	public String toString(){
		return String.format(
			"Custommer[id=%d, firstName='%s', lastName='%s', age='%d']",
			id, firstName, lastName, age
			);
	}
}