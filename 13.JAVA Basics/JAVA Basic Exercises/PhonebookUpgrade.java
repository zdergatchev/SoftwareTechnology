import java.util.Map;
import java.util.LinkedHashMap;
import java.util.Scanner;
import java.util.TreeMap;

public class PhonebookUpgrade {

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
                       case "A":
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
                       case "ListAll":
                           Map<String, String> sortedMap = new TreeMap<String, String>(phonebook);
                           for (String key : sortedMap.keySet()) {
                              
                               System.out.println(String.format("%s -> %s", key, phonebook.get(key)));
                           }
                           break;
                    }
                   input = scan.nextLine();
               }
      scan.close();
   }
}


