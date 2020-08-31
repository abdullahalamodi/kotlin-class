fun main(args: Array<String>) {

    println("sum of 5 , 6 is : ${SumClass(5, 6).sum()}");
}

class SumClass(x: Int, y: Int) {
    private val mX =  x;
    private val mY =  y;

    fun sum(): Int {
        return mX + mY;
    }

}