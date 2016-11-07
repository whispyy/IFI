package hello;

public class Greeting {
	public final long id;
	public final String content;

	public Greeting(long id,String content){
		this.id = id;
		this.content = content;
	}

	public long getId(){
		return this.id;
	}

	public String getContent(){
		return this.content;
	}
}