package hello;

import java.util.List;
import org.springframework.data.repository.CrudRepository;

public interface CharacterRepository extends CrudRepository<Character, Long> {
	List<Character> findByLastName(String lastName);
	List<Character> findByAge(int age);
	Iterable<Character> findAll();
}
