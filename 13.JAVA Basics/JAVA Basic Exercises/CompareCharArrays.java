import java.util.Arrays;
import java.util.Scanner;

public class CompareCharArrays {

	public static void main(String[] args) {		
		Scanner scan = new Scanner(System.in);		
		
		String[] input1 = scan.nextLine().toString().split("\\s+");
		StringBuilder word1 = new StringBuilder();
		for (int i = 0; i < input1.length; i++){
			word1.append(input1[i]);
		}
		String[] input2 = scan.nextLine().toString().split("\\s+");
		StringBuilder word2 = new StringBuilder();
		for (int i = 0; i < input2.length; i++){
			word2.append(input2[i]);
		}
        
        if (input1.length < input2.length)
        {         	
        	System.out.println(word1);
        	System.out.println(word2);
        }
        else if (input1.length > input2.length)
        {            
        	System.out.println(word2);
        	System.out.println(word1);
        }
        else if (input1.length == input2.length)
        {
            for (int i = 0; i < Math.min(word1.length(), word2.length()); i++)
            {

                if (input1[i].charAt(0) > input2[i].charAt(0))
                {                    
                	System.out.println(word2);
                	System.out.println(word1);
                    break;
                }
                if (input1[i].charAt(0) < input2[i].charAt(0))
                {   
                	System.out.println(word1);
                	System.out.println(word2);
                    break;
                }
                if (input1[i].charAt(0) == input2[i].charAt(0))
                {                    
                	System.out.println(word1);
                	System.out.println(word2);
                    break;
                }
            }
        }
	}

}
