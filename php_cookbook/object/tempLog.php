<?php

# This an example about the use of a destructor, using a 
# temporary file that's deleted once its content is displayed in
# the screen

class TempLogger
{
    private string $filename;
    private mixed $handle;

    public function __construct(string $name)
    {
        $this->filename = sprintf('tmp_%s_%s.tmp', $name, time());
        $this->handle = fopen($this->filename, 'w');
    }

    public function writeLog(string $line): void
    {
        fwrite($this->handle, $line . PHP_EOL);
    }

    public function getLogs(): Generator
    {
        $handle = fopen($this->filename, 'r');
        while(($buffer = fgets($handle, 4096)) !== false) {
            yield $buffer;
        }
        fclose($handle);
    }

    public function __destruct()
    {
        fclose($this->handle);
        unlink($this->filename);
    }
}

$logger = new TempLogger('testlog');
$logger->writeLog('This is a test');
$logger->writeLog('another test');
$logger->writeLog('and another');

foreach($logger->getLogs() as $log) {
    echo $log;
}

unset($logger);

?>