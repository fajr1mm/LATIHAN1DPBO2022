class memory{
    private String frequency;
    private String memorySize;
    private String supportsCuda;
    
    public memory() {
    }

    public memory(String frequency, String memorySize, String supportsCuda) {
        this.frequency = frequency;
        this.memorySize = memorySize;
        this.supportsCuda = supportsCuda;
    }

    public String getFrequency() {
        return frequency;
    }

    public void setFrequency(String frequency) {
        this.frequency = frequency;
    }

    public String getMemorySize() {
        return memorySize;
    }

    public void setMemorySize(String memorySize) {
        this.memorySize = memorySize;
    }

    public String getSupportsCuda() {
        return supportsCuda;
    }

    public void setSupportsCuda(String supportsCuda) {
        this.supportsCuda = supportsCuda;
    }



}
