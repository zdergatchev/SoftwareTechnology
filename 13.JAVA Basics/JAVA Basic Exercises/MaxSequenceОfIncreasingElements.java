import java.util.Scanner;

public class MaxSequenceÎfIncreasingElements {

	public static void main(String[] args) {
		
		Scanner cs = new Scanner(System.in);
		String[] numbers = cs.nextLine().toString().split("\\s+");
		int[] sequence = new int[numbers.length];
		for(int i = 0 ; i < numbers.length; i++){
			sequence[i] = Integer.parseInt(numbers[i]);
		}		

		int maxLength = -1;
		int startIndex = -1;
		for (int index = 0; index < sequence.length; index++)
		{
			int prevIndex = index;
			int currLength = 1;
			for (int nextIndex = index + 1; nextIndex < sequence.length; nextIndex++)
			{
				if (sequence[prevIndex] < sequence[nextIndex])
				{
					currLength++;
				}
				else
				{
					break;
				}

				prevIndex++;
			}

			if (currLength > maxLength)
			{
				maxLength = currLength;
				startIndex = index;
			}
		}

		for (int num = 0; num < maxLength; num++)
		{
			System.out.print(sequence[startIndex + num] + " ");
		}
		System.out.println();
	}


}
