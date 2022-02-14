public class main {

    public static void main(String[] args){
        product pOBJ = new product();
        hardware hOBJ = new hardware();
        memory mOBJ = new memory();

        pOBJ.setPrice("250000");
        pOBJ.setIdProduct("L099");

        hOBJ.setBrand("RYZEN");
        hOBJ.setModel("DDR40");

        mOBJ.setFrequency("240Ghz");
        mOBJ.setMemorySize("500GB");
        mOBJ.setSupportsCuda("Yes");

        System.out.println(pOBJ.getPrice());
        System.out.println(pOBJ.getIdProduct());
        System.out.println(hOBJ.getBrand());
        System.out.println(hOBJ.getModel());
        System.out.println(mOBJ.getFrequency());
        System.out.println(mOBJ.getMemorySize());
        System.out.println(mOBJ.getSupportsCuda());
    }
    
}
