
import java.util.LinkedHashMap;
import java.util.Scanner;

public class Phonebook {

	public static void main(String[] args) {

		Scanner scan = new Scanner(System.in);  
		
	    String input = scan.nextLine();
	    LinkedHashMap<String, String> phonebook = new LinkedHashMap<String, String>();
	    System.out.println();	         
    	  while (!input.equals("END"))
          {
              String[] contact = input.split("\\s+");	                          
           
              switch (contact[0])
              {
                  case 
                  "A":
                   String phone = contact[2].toString();
                      if (phonebook.containsKey(contact[1]))
                      {
                    	  phonebook.put(contact[1], phone);
                      }
                      else
                      {
                    	  phonebook.put(contact[1], phone);
                      }                
                      break;
                  case "S":
                      if (!phonebook.containsKey(contact[1]))
                      {
                         System.out.println(String.format("Contact %s does not exist.", contact[1]));
                      }
                      else
                      {	                        
                    	  System.out.println(String.format("%s -> %s", contact[1], phonebook.get(contact[1])));	                         
                      }
                      break;
              }
              input = scan.nextLine();
          }
        scan.close();		
	}
}
