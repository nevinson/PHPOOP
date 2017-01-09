<?

class Emailer
{
    private $sender;
    private $recipients;
    private $subject;
    private $body;
    
    function _construct($sender)
    {
        $this->sender=$sender;
    }
    
    public function addRecipients($recipient)
    {
        $this->recipients=$recipient;
    }
    
    public function setSubject($subject)
    {
        $this->subject=$subject;
    }
    
    public function setBody($body)
    {
        $this->body=$body;
    }
    
    public function sendEmail()
    {
        
            $result=mail($this->recipients, $this->subject, $this->body, "From: {$this->sender}\r\n");
            
            if ($result) echo "Mail successfully sent to {$this->recipients} <br />";
    }
}

?>
