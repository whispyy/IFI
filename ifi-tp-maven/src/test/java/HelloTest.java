import org.junit.Test;

import static org.junit.Assert.assertEquals;

public class HelloTest{

	@Test
	public void testGetMessage(){
		assertEquals("Hello Ginger !",new Hello().getMessage());
	}

}