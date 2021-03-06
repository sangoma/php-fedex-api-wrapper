<?php
namespace FedEx\CloseService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * GroundCloseReportsReprintReply
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Close Service
 */
class GroundCloseReportsReprintReply
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'GroundCloseReportsReprintReply';

    /**
     * Set HighestSeverity
     *
     * @param \FedEx\CloseService\SimpleType\NotificationSeverityType|string $highestSeverity
     * @return GroundCloseReportsReprintReply
     */
    public function setHighestSeverity($highestSeverity)
    {
        $this->HighestSeverity = $highestSeverity;
        return $this;
    }
    
    /**
     * Returns Set HighestSeverity
     *
     * @return \FedEx\CloseService\SimpleType\NotificationSeverityType|string
     */
    public function getHighestSeverity()
    {
        return $this->HighestSeverity;
    }
    
    /**
     * Set Notifications
     *
     * @param Notification[] $notifications
     * @return GroundCloseReportsReprintReply
     */
    public function setNotifications(array $notifications)
    {
        $this->Notifications = $notifications;
        return $this;
    }
    
    /**
     * Returns Set Notifications
     *
     * @return Notification[]
     */
    public function getNotifications()
    {
        return $this->Notifications;
    }
    
    /**
     * Set TransactionDetail
     *
     * @param TransactionDetail $transactionDetail
     * @return GroundCloseReportsReprintReply
     */
    public function setTransactionDetail(TransactionDetail $transactionDetail)
    {
        $this->TransactionDetail = $transactionDetail;
        return $this;
    }
    
    /**
     * Returns Set TransactionDetail
     *
     * @return TransactionDetail
     */
    public function getTransactionDetail()
    {
        return $this->TransactionDetail;
    }
    
    /**
     * Set Version
     *
     * @param VersionId $version
     * @return GroundCloseReportsReprintReply
     */
    public function setVersion(VersionId $version)
    {
        $this->Version = $version;
        return $this;
    }
    
    /**
     * Returns Set Version
     *
     * @return VersionId
     */
    public function getVersion()
    {
        return $this->Version;
    }
    
    /**
     * Set CodReport
     *
     * @param base64Binary $codReport
     * @return GroundCloseReportsReprintReply
     */
    public function setCodReport($codReport)
    {
        $this->CodReport = $codReport;
        return $this;
    }
    
    /**
     * Returns Set CodReport
     *
     * @return base64Binary
     */
    public function getCodReport()
    {
        return $this->CodReport;
    }
    
    /**
     * Set HazMatCertificate
     *
     * @param base64Binary $hazMatCertificate
     * @return GroundCloseReportsReprintReply
     */
    public function setHazMatCertificate($hazMatCertificate)
    {
        $this->HazMatCertificate = $hazMatCertificate;
        return $this;
    }
    
    /**
     * Returns Set HazMatCertificate
     *
     * @return base64Binary
     */
    public function getHazMatCertificate()
    {
        return $this->HazMatCertificate;
    }
    
    /**
     * Set Manifests
     *
     * @param ManifestFile[] $manifests
     * @return GroundCloseReportsReprintReply
     */
    public function setManifests(array $manifests)
    {
        $this->Manifests = $manifests;
        return $this;
    }
    
    /**
     * Returns Set Manifests
     *
     * @return ManifestFile[]
     */
    public function getManifests()
    {
        return $this->Manifests;
    }
    

    
}