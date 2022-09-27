<?php
/**
 * GetExtendedCampaignOverview
 *
 * PHP version 5
 *
 * @category Class
 * @package  SendinBlue\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
/**
 * SendinBlue API
 *
 * SendinBlue provide a RESTFul API that can be used with any languages. With this API, you will be able to :   - Manage your campaigns and get the statistics   - Manage your contacts   - Send transactional Emails and SMS   - and much more...  You can download our wrappers at https://github.com/orgs/sendinblue  **Possible responses**   | Code | Message |   | :-------------: | ------------- |   | 200  | OK. Successful Request  |   | 201  | OK. Successful Creation |   | 202  | OK. Request accepted |   | 204  | OK. Successful Update/Deletion  |   | 400  | Error. Bad Request  |   | 401  | Error. Authentication Needed  |   | 402  | Error. Not enough credit, plan upgrade needed  |   | 403  | Error. Permission denied  |   | 404  | Error. Object does not exist |   | 405  | Error. Method not allowed  |   | 406  | Error. Not Acceptable  |
 *
 * OpenAPI spec version: 3.0.0
 * Contact: contact@sendinblue.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.19
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace SendinBlue\Client\Model;

use \ArrayAccess;
use \SendinBlue\Client\ObjectSerializer;

/**
 * GetExtendedCampaignOverview Class Doc Comment
 *
 * @category Class
 * @package  SendinBlue\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GetExtendedCampaignOverview implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'getExtendedCampaignOverview';
    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'name' => 'string',
        'subject' => 'string',
        'type' => 'string',
        'status' => 'string',
        'scheduledAt' => 'string',
        'abTesting' => 'bool',
        'subjectA' => 'string',
        'subjectB' => 'string',
        'splitRule' => 'int',
        'winnerCriteria' => 'string',
        'winnerDelay' => 'int',
        'sendAtBestTime' => 'bool',
        'testSent' => 'bool',
        'header' => 'string',
        'footer' => 'string',
        'sender' => '\SendinBlue\Client\Model\GetExtendedCampaignOverviewSender',
        'replyTo' => 'string',
        'toField' => 'string',
        'htmlContent' => 'string',
        'shareLink' => 'string',
        'tag' => 'string',
        'createdAt' => 'string',
        'modifiedAt' => 'string',
        'inlineImageActivation' => 'bool',
        'mirrorActive' => 'bool',
        'recurring' => 'bool',
        'sentDate' => 'string',
        'returnBounce' => 'int'
    ];
    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int64',
        'name' => null,
        'subject' => null,
        'type' => null,
        'status' => null,
        'scheduledAt' => null,
        'abTesting' => null,
        'subjectA' => null,
        'subjectB' => null,
        'splitRule' => null,
        'winnerCriteria' => null,
        'winnerDelay' => null,
        'sendAtBestTime' => null,
        'testSent' => null,
        'header' => null,
        'footer' => null,
        'sender' => null,
        'replyTo' => 'email',
        'toField' => null,
        'htmlContent' => null,
        'shareLink' => 'url',
        'tag' => null,
        'createdAt' => null,
        'modifiedAt' => null,
        'inlineImageActivation' => null,
        'mirrorActive' => null,
        'recurring' => null,
        'sentDate' => null,
        'returnBounce' => 'int64'
    ];
    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'name' => 'name',
        'subject' => 'subject',
        'type' => 'type',
        'status' => 'status',
        'scheduledAt' => 'scheduledAt',
        'abTesting' => 'abTesting',
        'subjectA' => 'subjectA',
        'subjectB' => 'subjectB',
        'splitRule' => 'splitRule',
        'winnerCriteria' => 'winnerCriteria',
        'winnerDelay' => 'winnerDelay',
        'sendAtBestTime' => 'sendAtBestTime',
        'testSent' => 'testSent',
        'header' => 'header',
        'footer' => 'footer',
        'sender' => 'sender',
        'replyTo' => 'replyTo',
        'toField' => 'toField',
        'htmlContent' => 'htmlContent',
        'shareLink' => 'shareLink',
        'tag' => 'tag',
        'createdAt' => 'createdAt',
        'modifiedAt' => 'modifiedAt',
        'inlineImageActivation' => 'inlineImageActivation',
        'mirrorActive' => 'mirrorActive',
        'recurring' => 'recurring',
        'sentDate' => 'sentDate',
        'returnBounce' => 'returnBounce'
    ];
    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'subject' => 'setSubject',
        'type' => 'setType',
        'status' => 'setStatus',
        'scheduledAt' => 'setScheduledAt',
        'abTesting' => 'setAbTesting',
        'subjectA' => 'setSubjectA',
        'subjectB' => 'setSubjectB',
        'splitRule' => 'setSplitRule',
        'winnerCriteria' => 'setWinnerCriteria',
        'winnerDelay' => 'setWinnerDelay',
        'sendAtBestTime' => 'setSendAtBestTime',
        'testSent' => 'setTestSent',
        'header' => 'setHeader',
        'footer' => 'setFooter',
        'sender' => 'setSender',
        'replyTo' => 'setReplyTo',
        'toField' => 'setToField',
        'htmlContent' => 'setHtmlContent',
        'shareLink' => 'setShareLink',
        'tag' => 'setTag',
        'createdAt' => 'setCreatedAt',
        'modifiedAt' => 'setModifiedAt',
        'inlineImageActivation' => 'setInlineImageActivation',
        'mirrorActive' => 'setMirrorActive',
        'recurring' => 'setRecurring',
        'sentDate' => 'setSentDate',
        'returnBounce' => 'setReturnBounce'
    ];
    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'subject' => 'getSubject',
        'type' => 'getType',
        'status' => 'getStatus',
        'scheduledAt' => 'getScheduledAt',
        'abTesting' => 'getAbTesting',
        'subjectA' => 'getSubjectA',
        'subjectB' => 'getSubjectB',
        'splitRule' => 'getSplitRule',
        'winnerCriteria' => 'getWinnerCriteria',
        'winnerDelay' => 'getWinnerDelay',
        'sendAtBestTime' => 'getSendAtBestTime',
        'testSent' => 'getTestSent',
        'header' => 'getHeader',
        'footer' => 'getFooter',
        'sender' => 'getSender',
        'replyTo' => 'getReplyTo',
        'toField' => 'getToField',
        'htmlContent' => 'getHtmlContent',
        'shareLink' => 'getShareLink',
        'tag' => 'getTag',
        'createdAt' => 'getCreatedAt',
        'modifiedAt' => 'getModifiedAt',
        'inlineImageActivation' => 'getInlineImageActivation',
        'mirrorActive' => 'getMirrorActive',
        'recurring' => 'getRecurring',
        'sentDate' => 'getSentDate',
        'returnBounce' => 'getReturnBounce'
    ];
    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    const TYPE_CLASSIC = 'classic';
    const TYPE_TRIGGER = 'trigger';
    const STATUS_DRAFT = 'draft';
    const STATUS_SENT = 'sent';
    const STATUS_ARCHIVE = 'archive';
    const STATUS_QUEUED = 'queued';
    const STATUS_SUSPENDED = 'suspended';
    const STATUS_IN_PROCESS = 'in_process';



    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_CLASSIC,
            self::TYPE_TRIGGER,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_DRAFT,
            self::STATUS_SENT,
            self::STATUS_ARCHIVE,
            self::STATUS_QUEUED,
            self::STATUS_SUSPENDED,
            self::STATUS_IN_PROCESS,
        ];
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['subject'] = isset($data['subject']) ? $data['subject'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['scheduledAt'] = isset($data['scheduledAt']) ? $data['scheduledAt'] : null;
        $this->container['abTesting'] = isset($data['abTesting']) ? $data['abTesting'] : null;
        $this->container['subjectA'] = isset($data['subjectA']) ? $data['subjectA'] : null;
        $this->container['subjectB'] = isset($data['subjectB']) ? $data['subjectB'] : null;
        $this->container['splitRule'] = isset($data['splitRule']) ? $data['splitRule'] : null;
        $this->container['winnerCriteria'] = isset($data['winnerCriteria']) ? $data['winnerCriteria'] : null;
        $this->container['winnerDelay'] = isset($data['winnerDelay']) ? $data['winnerDelay'] : null;
        $this->container['sendAtBestTime'] = isset($data['sendAtBestTime']) ? $data['sendAtBestTime'] : null;
        $this->container['testSent'] = isset($data['testSent']) ? $data['testSent'] : null;
        $this->container['header'] = isset($data['header']) ? $data['header'] : null;
        $this->container['footer'] = isset($data['footer']) ? $data['footer'] : null;
        $this->container['sender'] = isset($data['sender']) ? $data['sender'] : null;
        $this->container['replyTo'] = isset($data['replyTo']) ? $data['replyTo'] : null;
        $this->container['toField'] = isset($data['toField']) ? $data['toField'] : null;
        $this->container['htmlContent'] = isset($data['htmlContent']) ? $data['htmlContent'] : null;
        $this->container['shareLink'] = isset($data['shareLink']) ? $data['shareLink'] : null;
        $this->container['tag'] = isset($data['tag']) ? $data['tag'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['modifiedAt'] = isset($data['modifiedAt']) ? $data['modifiedAt'] : null;
        $this->container['inlineImageActivation'] = isset($data['inlineImageActivation']) ? $data['inlineImageActivation'] : null;
        $this->container['mirrorActive'] = isset($data['mirrorActive']) ? $data['mirrorActive'] : null;
        $this->container['recurring'] = isset($data['recurring']) ? $data['recurring'] : null;
        $this->container['sentDate'] = isset($data['sentDate']) ? $data['sentDate'] : null;
        $this->container['returnBounce'] = isset($data['returnBounce']) ? $data['returnBounce'] : null;
    }
    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['testSent'] === null) {
            $invalidProperties[] = "'testSent' can't be null";
        }
        if ($this->container['header'] === null) {
            $invalidProperties[] = "'header' can't be null";
        }
        if ($this->container['footer'] === null) {
            $invalidProperties[] = "'footer' can't be null";
        }
        if ($this->container['sender'] === null) {
            $invalidProperties[] = "'sender' can't be null";
        }
        if ($this->container['replyTo'] === null) {
            $invalidProperties[] = "'replyTo' can't be null";
        }
        if ($this->container['htmlContent'] === null) {
            $invalidProperties[] = "'htmlContent' can't be null";
        }
        if ($this->container['createdAt'] === null) {
            $invalidProperties[] = "'createdAt' can't be null";
        }
        if ($this->container['modifiedAt'] === null) {
            $invalidProperties[] = "'modifiedAt' can't be null";
        }
        return $invalidProperties;
    }
    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id ID of the campaign
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name Name of the campaign
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets subject
     *
     * @return string
     */
    public function getSubject()
    {
        return $this->container['subject'];
    }

    /**
     * Sets subject
     *
     * @param string $subject Subject of the campaign. Only available if `abTesting` flag of the campaign is `false`
     *
     * @return $this
     */
    public function setSubject($subject)
    {
        $this->container['subject'] = $subject;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type Type of campaign
     *
     * @return $this
     */
    public function setType($type)
    {
        $allowedValues = $this->getTypeAllowableValues();
        if (!in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status Status of the campaign
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets scheduledAt
     *
     * @return string
     */
    public function getScheduledAt()
    {
        return $this->container['scheduledAt'];
    }

    /**
     * Sets scheduledAt
     *
     * @param string $scheduledAt UTC date-time on which campaign is scheduled (YYYY-MM-DDTHH:mm:ss.SSSZ)
     *
     * @return $this
     */
    public function setScheduledAt($scheduledAt)
    {
        $this->container['scheduledAt'] = $scheduledAt;

        return $this;
    }

    /**
     * Gets abTesting
     *
     * @return bool
     */
    public function getAbTesting()
    {
        return $this->container['abTesting'];
    }

    /**
     * Sets abTesting
     *
     * @param bool $abTesting Status of A/B Test for the campaign. abTesting = false means it is disabled, & abTesting = true means it is enabled.
     *
     * @return $this
     */
    public function setAbTesting($abTesting)
    {
        $this->container['abTesting'] = $abTesting;

        return $this;
    }

    /**
     * Gets subjectA
     *
     * @return string
     */
    public function getSubjectA()
    {
        return $this->container['subjectA'];
    }

    /**
     * Sets subjectA
     *
     * @param string $subjectA Subject A of the ab-test campaign. Only available if `abTesting` flag of the campaign is `true`
     *
     * @return $this
     */
    public function setSubjectA($subjectA)
    {
        $this->container['subjectA'] = $subjectA;

        return $this;
    }

    /**
     * Gets subjectB
     *
     * @return string
     */
    public function getSubjectB()
    {
        return $this->container['subjectB'];
    }

    /**
     * Sets subjectB
     *
     * @param string $subjectB Subject B of the ab-test campaign. Only available if `abTesting` flag of the campaign is `true`
     *
     * @return $this
     */
    public function setSubjectB($subjectB)
    {
        $this->container['subjectB'] = $subjectB;

        return $this;
    }

    /**
     * Gets splitRule
     *
     * @return int
     */
    public function getSplitRule()
    {
        return $this->container['splitRule'];
    }

    /**
     * Sets splitRule
     *
     * @param int $splitRule The size of your ab-test groups. Only available if `abTesting` flag of the campaign is `true`
     *
     * @return $this
     */
    public function setSplitRule($splitRule)
    {
        $this->container['splitRule'] = $splitRule;

        return $this;
    }

    /**
     * Gets winnerCriteria
     *
     * @return string
     */
    public function getWinnerCriteria()
    {
        return $this->container['winnerCriteria'];
    }

    /**
     * Sets winnerCriteria
     *
     * @param string $winnerCriteria Criteria for the winning version. Only available if `abTesting` flag of the campaign is `true`
     *
     * @return $this
     */
    public function setWinnerCriteria($winnerCriteria)
    {
        $this->container['winnerCriteria'] = $winnerCriteria;

        return $this;
    }

    /**
     * Gets winnerDelay
     *
     * @return int
     */
    public function getWinnerDelay()
    {
        return $this->container['winnerDelay'];
    }

    /**
     * Sets winnerDelay
     *
     * @param int $winnerDelay The duration of the test in hours at the end of which the winning version will be sent. Only available if `abTesting` flag of the campaign is `true`
     *
     * @return $this
     */
    public function setWinnerDelay($winnerDelay)
    {
        $this->container['winnerDelay'] = $winnerDelay;

        return $this;
    }

    /**
     * Gets sendAtBestTime
     *
     * @return bool
     */
    public function getSendAtBestTime()
    {
        return $this->container['sendAtBestTime'];
    }

    /**
     * Sets sendAtBestTime
     *
     * @param bool $sendAtBestTime It is true if you have chosen to send your campaign at best time, otherwise it is false
     *
     * @return $this
     */
    public function setSendAtBestTime($sendAtBestTime)
    {
        $this->container['sendAtBestTime'] = $sendAtBestTime;

        return $this;
    }

    /**
     * Gets testSent
     *
     * @return bool
     */
    public function getTestSent()
    {
        return $this->container['testSent'];
    }
    /**
     * Sets testSent
     *
     * @param bool $testSent Retrieved the status of test email sending. (true=Test email has been sent  false=Test email has not been sent)
     *
     * @return $this
     */
    public function setTestSent($testSent)
    {
        $this->container['testSent'] = $testSent;
        return $this;
    }
    /**
     * Gets header
     *
     * @return string
     */
    public function getHeader()
    {
        return $this->container['header'];
    }
    /**
     * Sets header
     *
     * @param string $header Header of the campaign
     *
     * @return $this
     */
    public function setHeader($header)
    {
        $this->container['header'] = $header;
        return $this;
    }
    /**
     * Gets footer
     *
     * @return string
     */
    public function getFooter()
    {
        return $this->container['footer'];
    }
    /**
     * Sets footer
     *
     * @param string $footer Footer of the campaign
     *
     * @return $this
     */
    public function setFooter($footer)
    {
        $this->container['footer'] = $footer;
        return $this;
    }
    /**
     * Gets sender
     *
     * @return \SendinBlue\Client\Model\GetExtendedCampaignOverviewSender
     */
    public function getSender()
    {
        return $this->container['sender'];
    }
    /**
     * Sets sender
     *
     * @param \SendinBlue\Client\Model\GetExtendedCampaignOverviewSender $sender sender
     *
     * @return $this
     */
    public function setSender($sender)
    {
        $this->container['sender'] = $sender;
        return $this;
    }
    /**
     * Gets replyTo
     *
     * @return string
     */
    public function getReplyTo()
    {
        return $this->container['replyTo'];
    }
    /**
     * Sets replyTo
     *
     * @param string $replyTo Email defined as the \"Reply to\" of the campaign
     *
     * @return $this
     */
    public function setReplyTo($replyTo)
    {
        $this->container['replyTo'] = $replyTo;
        return $this;
    }
    /**
     * Gets toField
     *
     * @return string
     */
    public function getToField()
    {
        return $this->container['toField'];
    }
    /**
     * Sets toField
     *
     * @param string $toField Customisation of the \"to\" field of the campaign
     *
     * @return $this
     */
    public function setToField($toField)
    {
        $this->container['toField'] = $toField;
        return $this;
    }
    /**
     * Gets htmlContent
     *
     * @return string
     */
    public function getHtmlContent()
    {
        return $this->container['htmlContent'];
    }
    /**
     * Sets htmlContent
     *
     * @param string $htmlContent HTML content of the campaign
     *
     * @return $this
     */
    public function setHtmlContent($htmlContent)
    {
        $this->container['htmlContent'] = $htmlContent;
        return $this;
    }
    /**
     * Gets shareLink
     *
     * @return string
     */
    public function getShareLink()
    {
        return $this->container['shareLink'];
    }
    /**
     * Sets shareLink
     *
     * @param string $shareLink Link to share the campaign on social medias
     *
     * @return $this
     */
    public function setShareLink($shareLink)
    {
        $this->container['shareLink'] = $shareLink;
        return $this;
    }
    /**
     * Gets tag
     *
     * @return string
     */
    public function getTag()
    {
        return $this->container['tag'];
    }
    /**
     * Sets tag
     *
     * @param string $tag Tag of the campaign
     *
     * @return $this
     */
    public function setTag($tag)
    {
        $this->container['tag'] = $tag;
        return $this;
    }
    /**
     * Gets createdAt
     *
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }
    /**
     * Sets createdAt
     *
     * @param string $createdAt Creation UTC date-time of the campaign (YYYY-MM-DDTHH:mm:ss.SSSZ)
     *
     * @return $this
     */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;
        return $this;
    }
    /**
     * Gets modifiedAt
     *
     * @return string
     */
    public function getModifiedAt()
    {
        return $this->container['modifiedAt'];
    }
    /**
     * Sets modifiedAt
     *
     * @param string $modifiedAt UTC date-time of last modification of the campaign (YYYY-MM-DDTHH:mm:ss.SSSZ)
     *
     * @return $this
     */
    public function setModifiedAt($modifiedAt)
    {
        $this->container['modifiedAt'] = $modifiedAt;
        return $this;
    }
    /**
     * Gets inlineImageActivation
     *
     * @return bool
     */
    public function getInlineImageActivation()
    {
        return $this->container['inlineImageActivation'];
    }
    /**
     * Sets inlineImageActivation
     *
     * @param bool $inlineImageActivation Status of inline image. inlineImageActivation = false means image can’t be embedded, & inlineImageActivation = true means image can be embedded, in the email.
     *
     * @return $this
     */
    public function setInlineImageActivation($inlineImageActivation)
    {
        $this->container['inlineImageActivation'] = $inlineImageActivation;
        return $this;
    }
    /**
     * Gets mirrorActive
     *
     * @return bool
     */
    public function getMirrorActive()
    {
        return $this->container['mirrorActive'];
    }
    /**
     * Sets mirrorActive
     *
     * @param bool $mirrorActive Status of mirror links in campaign. mirrorActive = false means mirror links are deactivated, & mirrorActive = true means mirror links are activated, in the campaign
     *
     * @return $this
     */
    public function setMirrorActive($mirrorActive)
    {
        $this->container['mirrorActive'] = $mirrorActive;
        return $this;
    }
    /**
     * Gets recurring
     *
     * @return bool
     */
    public function getRecurring()
    {
        return $this->container['recurring'];
    }
    /**
     * Sets recurring
     *
     * @param bool $recurring FOR TRIGGER ONLY ! Type of trigger campaign.recurring = false means contact can receive the same Trigger campaign only once, & recurring = true means contact can receive the same Trigger campaign several times
     *
     * @return $this
     */
    public function setRecurring($recurring)
    {
        $this->container['recurring'] = $recurring;
        return $this;
    }
    /**
     * Gets sentDate
     *
     * @return string
     */
    public function getSentDate()
    {
        return $this->container['sentDate'];
    }
    /**
     * Sets sentDate
     *
     * @param string $sentDate Sent UTC date-time of the campaign (YYYY-MM-DDTHH:mm:ss.SSSZ). Only available if 'status' of the campaign is 'sent'
     *
     * @return $this
     */
    public function setSentDate($sentDate)
    {
        $this->container['sentDate'] = $sentDate;
        return $this;
    }
    /**
     * Gets returnBounce
     *
     * @return int
     */
    public function getReturnBounce()
    {
        return $this->container['returnBounce'];
    }
    /**
     * Sets returnBounce
     *
     * @param int $returnBounce Total number of non-delivered campaigns for a particular campaign id.
     *
     * @return $this
     */
    public function setReturnBounce($returnBounce)
    {
        $this->container['returnBounce'] = $returnBounce;
        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }
    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset): mixed
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }
    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }
    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }
    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString(): string
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}