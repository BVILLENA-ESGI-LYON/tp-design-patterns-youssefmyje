<?php
// Autoload all necessary classes
require_once 'src/Model/Database/DbConnection.php';
require_once 'src/Factory/AlertFactory/AlertContentInterface.php';
require_once 'src/Factory/AlertFactory/EmailAlertContent.php';
require_once 'src/Factory/AlertFactory/SmsAlertContent.php';
require_once 'src/Factory/AlertFactory/EmailAlertContentFactory.php';
require_once 'src/Factory/AlertFactory/SmsAlertContentFactory.php';
require_once 'src/Builder/Email.php';
require_once 'src/Adapter/Entity/Event/Export/EventCsvExportAdapter.php';
require_once 'src/Adapter/Entity/Event/Export/EventJsonExportAdapter.php';
require_once 'src/Decorator/Entity/Event/Event.php';
require_once 'src/Decorator/Entity/Event/EventLoggerDecorator.php';
require_once 'src/Decorator/Entity/Event/EventErrorHandlingDecorator.php';
require_once 'src/Decorator/Entity/Event/EventValidationDecorator.php';
require_once 'src/Facade/EventRepository.php';
require_once 'src/Observer/EventObserver.php';
require_once 'src/Observer/EventPublisher.php';
require_once 'src/Observer/EventLogger.php';
require_once 'src/Logger/LoggerWithStrategies.php';
require_once 'src/Logger/Strategy/LogStrategy.php';
require_once 'src/Logger/Strategy/FileDebugLogStrategy.php';
require_once 'src/Logger/Strategy/FileLogStrategy.php';
require_once 'src/Logger/Strategy/DatabaseLogStrategy.php';
require_once 'src/Logger/Strategy/SendAdminEmailLogStrategy.php';
require_once 'src/TemplateMethod/EventRegistration.php';
require_once 'src/TemplateMethod/SportsEventRegistration.php';
require_once 'src/TemplateMethod/BdeEventRegistration.php';

use EsgiIw\TpDesignPattern\Model\Database\DbConnection;
use EsgiIw\TpDesignPattern\Factory\AlertFactory\EmailAlertContentFactory;
use EsgiIw\TpDesignPattern\Factory\AlertFactory\SmsAlertContentFactory;
use EsgiIw\TpDesignPattern\Builder\Email;
use EsgiIw\TpDesignPattern\Adapter\Entity\Event\Export\EventCsvExportAdapter;
use EsgiIw\TpDesignPattern\Adapter\Entity\Event\Export\EventJsonExportAdapter;
use EsgiIw\TpDesignPattern\Decorator\Entity\Event\Event;
use EsgiIw\TpDesignPattern\Decorator\Entity\Event\EventLoggerDecorator;
use EsgiIw\TpDesignPattern\Facade\EventRepository;
use EsgiIw\TpDesignPattern\Observer\EventPublisher;
use EsgiIw\TpDesignPattern\Observer\EventLogger;
use EsgiIw\TpDesignPattern\Logger\LoggerWithStrategies;
use EsgiIw\TpDesignPattern\Logger\Strategy\FileDebugLogStrategy;
use EsgiIw\TpDesignPattern\Logger\Strategy\FileLogStrategy;
use EsgiIw\TpDesignPattern\Logger\Strategy\DatabaseLogStrategy;
use EsgiIw\TpDesignPattern\Logger\Strategy\SendAdminEmailLogStrategy;
use EsgiIw\TpDesignPattern\TemplateMethod\SportsEventRegistration;
use EsgiIw\TpDesignPattern\TemplateMethod\BdeEventRegistration;

// Singleton Pattern Usage
$db = DbConnection::getInstance();

// Abstract Factory Usage
$emailContent = EmailAlertContentFactory::createContent('Admin notification: A new user has registered.');
$smsContent = SmsAlertContentFactory::createContent('Reminder: Your event is tomorrow.');

echo $emailContent->getContent() . "\n";
echo $smsContent->getContent() . "\n";

// Builder Pattern Usage
$email = new Email();
$email->addTo('user@example.com')
    ->addCc('another@example.com')
    ->setSubject('Welcome to Our Service')
    ->setMessage('Thank you for registering with us.')
    ->addAttachment('terms.pdf')
    ->send();

// Adapter Pattern Usage
$events = [
    ['date' => '2023-10-01', 'name' => 'Tech Conference', 'location' => 'New York'],
    ['date' => '2023-10-15', 'name' => 'Music Festival', 'location' => 'Los Angeles']
];
$csvExporter = new EventCsvExportAdapter();
$jsonExporter = new EventJsonExportAdapter();

echo $csvExporter->export($events);
echo "\n";
echo $jsonExporter->export($events);

// Decorator Usage
$baseEvent = new EventLoggerDecorator(new Event('2023-10-01', 'Tech Conference', 'New York'));
echo $baseEvent->displayEvent() . "\n";

// Facade Usage
$eventRepo = new EventRepository();
$eventRepo->save(['name' => 'New Event', 'date' => '2023-11-01', 'location' => 'Online']);
$eventRepo->find(1);
$eventRepo->update(1, ['name' => 'Updated Event Name']);
$eventRepo->delete(1);

// Observer Usage
$publisher = new EventPublisher();
$publisher->addObserver(new EventLogger());
$publisher->changeEvent(['name' => 'Tech Talk', 'date' => '2023-12-01']);

// Strategy Usage
$logger = new LoggerWithStrategies();
$logger->setStrategy(new FileDebugLogStrategy());
$logger->log("This is a normal log.");
$logger->setStrategy(new DatabaseLogStrategy());
$logger->log("This is an error log.");

// Template Method Usage
$sportsRegistration = new SportsEventRegistration();
$sportsRegistration->register(['medicalCertificate' => true]);

$bdeRegistration = new BdeEventRegistration();
$bdeRegistration->register(['member' => true]);
