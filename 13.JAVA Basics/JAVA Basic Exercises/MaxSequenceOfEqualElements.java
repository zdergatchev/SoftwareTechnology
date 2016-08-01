import java.util.Scanner;

public class MaxSequenceOfEqualElements {

	public static void main(String[] args) {
		Scanner scan = new Scanner(System.in);
		
		String[] numbers = scan.nextLine().toString().split("\\s+");
		int[] sequence = new int[numbers.length];
		for(int i = 0 ; i < numbers.length; i++){
			sequence[i] = Integer.parseInt(numbers[i]);
		}
		scan.close();
		int index = 0;
        int lenght = 1;
        int current = 1;
        int prev = sequence[0];
        for (int i = 1; i < sequence.length; i++){
            if (prev == sequence[i]){
                current++;
            }
            else{
                if (current > lenght){
                    lenght = current;
                    index = i - 1;
                }
                current = 1;
            }
            prev = sequence[i];
            if (i == sequence.length - 1){
                if (current > lenght){
                    lenght = current;
                    index = i;
                }
            }
        }
        for (int j = index - lenght + 1; j <= index; j++){
             System.out.print(sequence[j] + " ");
         }
         System.out.println();
	}
}
