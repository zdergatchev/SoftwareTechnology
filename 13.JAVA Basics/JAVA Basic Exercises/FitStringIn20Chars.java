import java.util.Scanner;

public class FitStringIn20Chars {

	public static void main(String[] args) {	

		Scanner scan = new Scanner(System.in);
		  String input = scan.nextLine().toString();
		        
		  int length = 20;
		        if (input.length() < length){
			         StringBuilder text = new StringBuilder(); 
			         for(int i = 0; i < input.length(); i++){
			        	 text.append(input.charAt(i));
			         } 
			         for(int i = input.length(); i < length ; i++){
			        	 text.append('*');
			         } 
			            System.out.println(text);
		        }
		        else{
		            System.out.println(input.substring(0, length));
		        }
		}
}
