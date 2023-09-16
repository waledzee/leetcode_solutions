class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function maxSubArray($nums) {

        //sudo code
        // count the $nums
        //if count(nums)=1 then return nums[0]
        // then intilize maxsum=-999999
        // loop [from 0 to $n]
        //  if sum +nums[index] < $nums[index] >> sum=nums[index]
        //  else sum=sum+nums[index]

        // if maxsum < sum then maxsum= sum;

        //reurn max sum
        $sum=0;
        $max=-9999999999;
        $c=count($nums);
        if($c==1) return $nums[0];
        for($i=0;$i<$c;$i++ )
        {
            if($sum+$nums[$i] < $nums[$i])

                $sum=$nums[$i];

            else
                $sum+=$nums[$i];


             if($sum > $max)
            
                $max=$sum;
            
        }

        return $max;
        
    }
}