<?php
/**
 * Contains EWSType_FindMessageTrackingReportRequestType.
 */

/**
 * Represents criteria for the types of messages to find.
 *
 * @package php-ews\Types
 *
 * @todo Extend EWSType_BaseRequestType.
 */
class EWSType_FindMessageTrackingReportRequestType extends EWSType
{
    /**
     * Represents the level of detail for diagnostic reports.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    public $DiagnosticsLevel;

    /**
     * Contains the name of the domain where the message tracking is executed.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    public $Domain;

    /**
     * Contains the ending date and time for the search.
     *
     * @since Exchange 2010
     *
     * @var string
     *
     * @todo Make a DateTime object.
     */
    public $EndDateTime;

    /**
     * Contains the name of the mailbox where the cross-premise message was
     * sent.
     *
     * @since Exchange 2010
     *
     * @var EWSType_EmailAddressType
     */
    public $FederatedDeliveryMailbox;

    /**
     * Contains the message identifier for the search.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    public $MessageId;

    /**
     * Contains a list of one or more tracking properties.
     *
     * This element is optional.
     *
     * @since Exchange 2010 SP1
     *
     * @var EWSType_ArrayOfTrackingPropertiesType
     */
    public $Properties;

    /**
     * Contains contact information for the alleged sender of an e-mail message.
     *
     * @since Exchange 2010
     *
     * @var EWSType_EmailAddressType
     */
    public $PurportedSender;

    /**
     * Contains the e-mail address for the recipient of the message.
     *
     * @since Exchange 2010
     *
     * @var EWSType_EmailAddressType
     */
    public $Recipient;

    /**
     * Represents how extensive the message tracking report should be.
     *
     * @since Exchange 2010
     *
     * @var EWSType_ScopeType
     */
    public $Scope;

    /**
     * Contains contact information for the sender of the e-mail message.
     *
     * @since Exchange 2010
     *
     * @var EWSType_EmailAddressType
     */
    public $Sender;

    /**
     * Represents the starting point for tracking a message in a remote site or
     * forest.
     *
     * @since Exchange 2010 SP1
     *
     * @var string
     */
    public $ServerHint;

    /**
     * Contains the starting date and time for the search.
     *
     * @since Exchange 2010
     *
     * @var string
     *
     * @todo Make a DateTime object.
     */
    public $StartDateTime;

    /**
     * Contains the subject of the e-mail message.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    public $Subject;
}
