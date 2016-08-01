import java.util.Scanner;

public class MostFrequentNumber {

	public static void main(String[] args) {		
		Scanner scan = new Scanner(System.in);
		String[] numbers = scan.nextLine().toString().split("\\s+");
		int[] array = new int[numbers.length];
		for(int i = 0 ; i < numbers.length; i++){
		    array[i] = Integer.parseInt(numbers[i]);
		}

		int mostFreqNum = array[0];
		int count = 1;
		int maxCount = 1;

		for (int i = 0; i < array.length; i++)
		{
			count = 1;
			for (int j = i + 1; j < array.length; j++)
			{
				if (array[j] == array[i])
				{
					count++;
				}
				if (count > maxCount)
				{
					maxCount = count;
					mostFreqNum = array[j];
				}
			}
		}
		System.out.print(mostFreqNum);
	}
}
