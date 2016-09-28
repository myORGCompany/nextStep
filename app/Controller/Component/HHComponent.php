<?php
App::uses( 'Component', 'Controller' );
App::uses( 'CakeEmail', 'Network/Email' );

class HHComponent extends Component {

    public function sendMail( $options = array() ) {
        extract( $options );
        if( !isset( $channel ) || $channel == '' ) $channel = 'elastic';
        $email = new CakeEmail( $channel );
        if( $attachment != '' ) $email->attachments( $attachment );
        if( $cc != '' ) $email->cc( $cc );
        if( $bcc != '' ) $email->bcc( $bcc );
        if( strlen($replyTo) < 5 ) $replyTo = $semailid;
        if( !$this->validEmail( $emailid ) ) return true;
        try {
            $email->template( $view );
            $email->emailFormat( 'html' );
            $email->to( $emailid );
            $email->from( $from, $fromName );
            $email->replyTo( $replyTo );
            $email->subject( $subject );
            $emailLog = array( 'email_id' => $emailid, 'subject' => $subject, 'template' => $view, 'from' => $from );
            $email->viewVars( array( 'message' => $message ) );
            $emailResponse = $email->send();
            $sesObject['content'] = base64_encode( $emailResponse['message'] );
            $sesObject['ses_message_id'] = $emailResponse['response'][1]['message'];
            $sesObject['ses_message_id'] = str_replace( array( ' ', 'ok', 'Ok', 'OK' ), '', $sesObject['ses_message_id'] );
        } catch (Exception $e) {
            $EmailTrack = ClassRegistry::init('EmailTrack');
            $EmailTrack->create();
            $em['EmailTrack'] = array('emailid' => $emailid, 'subject' => $subject, 'view' => $view, 'message' => serialize($message), 'error_mail' => $e->getMessage(), 'from_mail' => 'devr96@gmail.com');
            $EmailTrack->save($em);
            $success_message['status'] = 'FAILED';
            $success_message['message'] = " error ".$e->getMessage();
        }
        return $success_message;
    }
}