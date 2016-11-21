package hello;

import javax.persistence.Entity;
import javax.persistence.GeneratedValue;
import javax.persistence.GenerationType;
import javax.persistence.Id;

@Entity
public class Character{

	@Id
	@GeneratedValue(strategy=GenerationType.AUTO)
	private Long id;
	private String firstName;
	private String lastName;
	private int age;

	protected Character() {}

	public Character(String f, String l, int a) {
		this.firstName = f;
		this.lastName = l;
		this.age = a;
	}
	
	public Long getId(){
		return this.id;
	}
	
	public String getFirstName(){
		return this.firstName;
	}
	
	public String getLastName(){
		return this.lastName;
	}
	
	public int getAge(){
		return this.age;
	}

	@Override
	public String toString(){
		return String.format(
			"Character[id=%d, firstName='%s', lastName='%s', age='%d']",
			id, firstName, lastName, age
			);
	}
}
