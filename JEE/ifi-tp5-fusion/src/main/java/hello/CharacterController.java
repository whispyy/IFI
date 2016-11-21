package hello;

import javax.ws.rs.POST;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.RequestBody;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RequestMethod;
import org.springframework.web.bind.annotation.RequestParam;
import org.springframework.web.bind.annotation.RestController;

@RestController
public class CharacterController {
    @Autowired
    private CharacterRepository repository;

    @RequestMapping("/characters")
    public Iterable<Character> getAllCharacters() {
        return repository.findAll();
    }
    
    @RequestMapping("/characters/{id}")
    public Character getCharacter(@PathVariable Long id){
		return repository.findOne(id);    	
    }
    

    @RequestMapping(method = RequestMethod.GET, value = "/characters/") 
    public Iterable<Character> allCustomers(@RequestParam(value="name", defaultValue="") String name){ 
    	return repository.findByLastName(name); 
    }
    
    /**
    @RequestMapping("/characters/}")
    public Character getCharacter(@RequestParam String orderBy){
    	return (Character) repository.findByLastName(orderBy);    	
    }*/
 
    
}
 