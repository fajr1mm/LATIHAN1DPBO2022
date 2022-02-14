class product {
    private String price;
    private String idProduct;
    
    public product() {
    }

    public product(String price, String idProduct) {
        this.price = price;
        this.idProduct = idProduct;
    }

    public String getPrice() {
        return price;
    }

    public void setPrice(String price) {
        this.price = price;
    }

    public String getIdProduct() {
        return idProduct;
    }

    public void setIdProduct(String idProduct) {
        this.idProduct = idProduct;
    }

}
