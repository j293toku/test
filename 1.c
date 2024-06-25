#include <stdio.h>

int main(void)  
{  
  int n;
  
  printf("n = ");
  scanf("%d", &n);
  if( (n & 1) == 0 ){  //nの最下位ビットを調べ、1であればその数は奇数、0であればその数は偶数
  printf("%d は偶数です\n", n);}  
  else{
    printf("%d は奇数です\n", n);
  }
  return 0;
}
