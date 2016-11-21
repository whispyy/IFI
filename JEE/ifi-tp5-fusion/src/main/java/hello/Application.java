package hello;

import org.slf4j.Logger;
import org.slf4j.LoggerFactory;

import org.springframework.boot.CommandLineRunner;
import org.springframework.boot.SpringApplication;
import org.springframework.boot.autoconfigure.SpringBootApplication;
import org.springframework.context.annotation.Bean;

@SpringBootApplication
public class Application {
	
	private static final Logger log = LoggerFactory.getLogger(Application.class);

	public static void main(String[] args){
		SpringApplication.run(Application.class);
	}

	@Bean
	public CommandLineRunner demo(CharacterRepository repository) {
		return (args) -> {
			// save a couple of customers
			repository.save(new Character("Jack", "Bauer", 35));
			repository.save(new Character("Chloe", "O'Brian", 25));
			repository.save(new Character("JF", "Bla", 23));
			repository.save(new Character("Kim", "Bauer", 24));
			repository.save(new Character("David", "Palmer", 42));
			repository.save(new Character("Michelle", "Dessler", 41));

			// fetch all customers
			log.info("Customers found with findAll():");
			log.info("-------------------------------");
			for (Character customer : repository.findAll()) {
				log.info(customer.toString());
			}
            log.info("");

			// fetch an individual customer by ID
            Character customer = repository.findOne(1L);
			log.info("Customer found with findOne(1L):");
			log.info("--------------------------------");
			log.info(customer.toString());
            log.info("");

			// fetch customers by last name
			log.info("Customer found with findByLastName('Bauer'):");
			log.info("--------------------------------------------");
			for (Character bauer : repository.findByLastName("Bauer")) {
				log.info(bauer.toString());
			}
            log.info("");
            log.info("Customer found with findByAge(23)");
            log.info("---------------------------------");
            for (Character c23 : repository.findByAge(23)){
            	log.info(c23.toString());
            }
		};
	}
}