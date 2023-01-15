class CSV {
    // file path
    private $file;
    // CSV delimiter
    private $delimiter;
    // CSV header
    private $header;

    public function __construct($file, $delimiter = ",", $header = true) {
        $this->file = $file;
        $this->delimiter = $delimiter;
        $this->header = $header;
    }

    // Read CSV file
    public function read() {
        $data = array();
        if (($handle = fopen($this->file, "r")) !== false) {
            while (($row = fgetcsv($handle, 1000, $this->delimiter)) !== false) {
                if ($this->header) {
                    $this->header = false;
                } else {
                    $data[] = $row;
                }
            }
            fclose($handle);
        }
        return $data;
    }

    // Write to CSV file
    public function write($data) {
        if (($handle = fopen($this->file, "w")) !== false) {
            foreach ($data as $row) {
                fputcsv($handle, $row, $this->delimiter);
            }
            fclose($handle);
            return true;
        }
        return false;
    }
}
