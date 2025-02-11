<?php

/**
 * Generated  2023-01-13T18:22:53+02:00 16.0.23207.12005
 */
namespace Office365\SharePoint;

use Office365\Runtime\ClientValue;
/**
 * This class 
 * stores basic overview information about the link URL, including limited data about 
 * the object the link URL refers to and any additional sharing link data if the 
 * link URL is a tokenized sharing link.
 */
class SharingLinkData extends ClientValue
{
    /**
     * @var bool
     */
    public $BlocksDownload;
    /**
     * @var string
     */
    public $Description;
    /**
     * @var bool
     */
    public $Embeddable;
    /**
     * The UTC 
     * date/time string with complete representation for calendar date and time of day 
     * which represents the time and date of expiry for the tokenized sharing link 
     * (i.e. is not accessible anymore). Format returned from get operation is 
     * "YYYY-MM-DDThh:mm:ss.fffZ" (e.g. 
     * "2016-09-22T12:20:10.125Z"), with a null value indicating no expiry. 
     * The date/time string format for set operations conforms to the ISO 8601:2004(E) 
     * complete representation for calendar date and time of day. Both the minutes and 
     * hour value MUST be specified for the difference between the local and UTC time. 
     * Midnight is represented as 00:00:00. For example: YYYYMMDDThhmmssZ 
     * YYYYMMDDThhmmss±hhmm YYYYMMDDThhmmss±hh:mm YYYYMMDDThhmmssfffZ 
     * YYYY-MM-DDThh:mm:ssZ YYYY-MM-DDThh:mm:ss±hh:mm YYYY-MM-DDThh:mm:ss±hhmm 
     * YYYY-MM-DDThh:mm:ss.fffZ A null value indicates no expiry.If the 
     * link URL is a tokenized sharing link that supports expiration and has an 
     * expiration value set, this MUST indicate when the tokenized sharing link is set 
     * to expire and stop providing access through the link, it MUST be null 
     * otherwise.
     * @var string
     */
    public $Expiration;
    /**
     * Boolean 
     * indicating whether the link URL is a tokenized sharing link 
     * that has any external guest invitees (external users explicitly invited by 
     * email address).This value 
     * MUST be true only if the link URL is a tokenized sharing link which is 
     * configured to support specific external guest invitees, otherwise this MUST be 
     * false.
     * @var bool
     */
    public $HasExternalGuestInvitees;
    /**
     * Boolean 
     * indicating if the link is anonymously accessible.This value 
     * MUST be true if the link URL is an anonymous access link, 
     * otherwise this MUST be false.
     * @var bool
     */
    public $IsAnonymous;
    /**
     * @var bool
     */
    public $IsCreateOnlyLink;
    /**
     * Indicates 
     * if the link URL is a tokenized sharing link 
     * that supports forms sharing. This is limited to only tokenized sharing links 
     * generated with the Workspaces Survey feature.This value
     * MUST be true only if the link URL is a tokenized sharing link which is 
     * configured to support forms sharing, otherwise this MUST be false.
     * @var bool
     */
    public $IsFormsLink;
    /**
     * Indicates 
     * whether the link URL is generated from sharing dialog.This value 
     * MUST be true only if the link URL contains a value that indicates it originated 
     * from the sharing dialog, otherwise this MUST be false.
     * @var bool
     */
    public $IsOriginatedFromSharingFlow;
    /**
     * Indicates 
     * if the link URL is a tokenized sharing link 
     * that supports review operations.This value 
     * MUST be true only if the link URL is a tokenized sharing link which is 
     * configured to support access with the review role, otherwise this MUST be 
     * false.
     * @var bool
     */
    public $IsReviewLink;
    /**
     * Indicates 
     * if the link URL is a tokenized sharing link. 
     * This value 
     * MUST be true only if the link URL is a tokenized sharing link, otherwise this 
     * MUST be false.
     * @var bool
     */
    public $IsSharingLink;
    /**
     * Indicates 
     * if the link URL is a tokenized sharing link 
     * that supports write/edit operations.This value 
     * MUST be true only if the link URL is a tokenized sharing link which is 
     * configured to support access with the edit role, otherwise this MUST be false.
     * @var bool
     */
    public $IsWritable;
    /**
     * The kind 
     * of link that the link URL refers to.
     * @var integer
     */
    public $LinkKind;
    /**
     * The type 
     * of object the link URL refers to.
     * @var integer
     */
    public $ObjectType;
    /**
     * The unique 
     * identifier of the object the link URL refers to.
     * @var string
     */
    public $ObjectUniqueId;
    /**
     * Indicates 
     * if the link URL is a tokenized sharing link 
     * that requires a password before users can gain access.This value 
     * MUST be true only if the link URL is a tokenized sharing link which is 
     * configured to support access only with a password, otherwise this MUST be 
     * false.
     * @var bool
     */
    public $RequiresPassword;
    /**
     * Indicates 
     * whether the link URL allows access only to a specified membership set.This MUST 
     * be true if the link URL is a tokenized sharing link 
     * that is configured to support restricted share membership, or if the link URL 
     * is the canonical URL for a 
     * document as access is enforced by membership in an access control list (ACL), 
     * otherwise it MUST be false.
     * @var bool
     */
    public $RestrictedShareMembership;
    /**
     * The 
     * identifier of the object that stores the settings of a tokenized 
     * sharing link specified by the link URL.This value 
     * MUST be an empty GUID if the 
     * link URL is not a tokenized sharing link and MUST be set to the identity of the 
     * object that stores the settings if the link URL is a tokenized sharing link. 
     * @var string
     */
    public $ShareId;
    /**
     * @var bool
     */
    public $IsManageListLink;
    /**
     * @var bool
     */
    public $TrackLinkUsers;
}