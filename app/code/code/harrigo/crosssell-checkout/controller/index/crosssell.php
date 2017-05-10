<?php
namespace Harrigo\CrosssellCheckout\Controller\Index;

use Magento\Framework\Controller\ResultFactory;

class Crosssell extends \Magento\Framework\App\Action\Action
{
	protected $resultPageFactory;

	/**
	 * Constructor
	 * 
	 * @param \Magento\Framework\App\Action\Context  $context
	 * @param \Magento\Framework\View\Result\PageFactory $resultPageFactory
	 */
	public function __construct(
		\Magento\Framework\App\Action\Context $context,
		\Magento\Framework\View\Result\PageFactory $resultPageFactory

	)
	{
		$this->resultPageFactory = $resultPageFactory;
		$this->_resultFactory = $context->getResultFactory();
		parent::__construct($context);
	}

	/**
	 * Execute view action
	 * 
	 * @return \Magento\Framework\Controller\ResultInterface
	 */
	public function execute()
	{
		echo "Crosssell checkout";
		$resultLayout = $this->resultFactory->create(ResultFactory::TYPE_LAYOUT);
		return $resultLayout;
	}
}
