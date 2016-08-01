import java.util.Scanner;

public class IntegerToHexAndBinary {

	public static void main(String[] args) {
		Scanner scan = new Scanner(System.in);
		int inputDec = scan.nextInt();	
		
		String outputHex = Integer.toHexString(inputDec).toUpperCase();
		String outputBin = Integer.toBinaryString(inputDec);
		   
		System.out.println(outputHex);
		System.out.println(outputBin);		
	}
}
