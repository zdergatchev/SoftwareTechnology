
import java.util.Scanner;

public class ReverseCharacters {
	public static void main(String[] args) {
		Scanner scan = new Scanner(System.in);
		char[] letters = new char[3];
		char[] reversed = new char[3];
				
		for (int i = 0; i < letters.length; i++){			
			letters[i] = scan.next().charAt(0);	
			reversed[letters.length - i - 1] = letters[i];
		}	
		
		for (int i = 0; i < letters.length; i++){
			{
				System.out.print(reversed[i]);
			}
		}
	}
}

