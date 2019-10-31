<?php
namespace ProductsBundle\Tool;
use PackageVersions\Versions;
use Pimcore\Tool;
use Pimcore\Model\User;
use Pimcore\Model\DataObject;
use Pimcore\Model\Translation;
use Pimcore\Model\Staticroute;
use Pimcore\Extension\Bundle\Installer\AbstractInstaller;
use Pimcore\Bundle\AdminBundle\Security\User\TokenStorageUserResolver;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\Serializer\Serializer;
use ProductsBundle\ProductsBundle;
use ProductsBundle\Configuration\Configuration;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Yaml\Yaml;
class Install extends AbstractInstaller
{
    /**
     * @var TokenStorageUserResolver
     */
    protected $resolver;
    /**
     * @var Serializer
     */
    private $serializer;
    /**
     * @var string
     */
    private $installSourcesPath;
    /**
     * @var Filesystem
     */
    private $fileSystem;
    /**
     * @var array
     */
    private $classes = [
        'Product',
        'Disease',
        'Category',
        'BodyLocation',
        'Substance',
        'Tube'
    ];
    /**
     * Install constructor.
     *
     * @param SerializerInterface      $serializer
     * @param TokenStorageUserResolver $resolver
     */
    public function __construct(TokenStorageUserResolver $resolver, SerializerInterface $serializer)
    {
        parent::__construct();
        $this->resolver = $resolver;
        $this->serializer = $serializer;
        $this->installSourcesPath = __DIR__ . '/../Resources/install';
        $this->fileSystem = new Filesystem();
    }
    /**
     * {@inheritdoc}
     */
    public function install()
    {
        $this->installClasses();
        $this->createFolders();
    }

    /**
     * {@inheritdoc}
     */
    public function uninstall()
    {
        if ($this->fileSystem->exists(Configuration::SYSTEM_CONFIG_FILE_PATH)) {
            $this->fileSystem->rename(
                Configuration::SYSTEM_CONFIG_FILE_PATH,
                PIMCORE_PRIVATE_VAR . '/bundles/NewsBundle/config_backup.yml'
            );
        }
    }
    /**
     * {@inheritdoc}
     */
    public function isInstalled()
    {
        return $this->fileSystem->exists(Configuration::SYSTEM_CONFIG_FILE_PATH);
    }
    /**
     * {@inheritdoc}
     */
    public function canBeInstalled()
    {
        return !$this->fileSystem->exists(Configuration::SYSTEM_CONFIG_FILE_PATH);
    }
    /**
     * {@inheritdoc}
     */
    public function canBeUninstalled()
    {
        return $this->fileSystem->exists(Configuration::SYSTEM_CONFIG_FILE_PATH);
    }
    /**
     * {@inheritdoc}
     */
    public function needsReloadAfterInstall()
    {
        return false;
    }
    /**
     * {@inheritdoc}
     */
    public function canBeUpdated()
    {
        return false;
    }
    
    /**
     * @return bool
     */
    public function installClasses()
    {
        foreach ($this->getClasses() as $className => $path) {
            $class = new DataObject\ClassDefinition();
            $id = $class->getDao()->getIdByName($className);
            if ($id !== false) {
                continue;
            }
            $class->setName($className);
            $data = file_get_contents($path);
            $success = DataObject\ClassDefinition\Service::importClassDefinitionFromJson($class, $data);
        }
    }
   
    /**
     * @return bool
     */
    public function createFolders()
    {        
        $products = DataObject\Folder::getByPath('/products');
        $categories = DataObject\Folder::getByPath('/categories');
        $diseases = DataObject\Folder::getByPath('/diseases');
        $bodylocations = DataObject\Folder::getByPath('/bodylocations');
        if (!$categories instanceof DataObject\Folder) {
            DataObject\Folder::create([
                'o_parentId'         => 1,
                'o_creationDate'     => time(),
                'o_userOwner'        => $this->getUserId(),
                'o_userModification' => $this->getUserId(),
                'o_key'              => 'Categories',
                'o_published'        => true,
            ]);
        }
        if (!$products instanceof DataObject\Folder) {
            $products = DataObject\Folder::create([
                'o_parentId'         => 1,
                'o_creationDate'     => time(),
                'o_userOwner'        => $this->getUserId(),
                'o_userModification' => $this->getUserId(),
                'o_key'              => 'Products',
                'o_published'        => true,
            ]);
        }
        if (!$diseases instanceof DataObject\Folder) {
            DataObject\Folder::create([
                'o_parentId'         => 1,
                'o_creationDate'     => time(),
                'o_userOwner'        => $this->getUserId(),
                'o_userModification' => $this->getUserId(),
                'o_key'              => 'Diseases',
                'o_published'        => true,
            ]);
        }

        if (!$bodylocations instanceof DataObject\Folder) {
            DataObject\Folder::create([
                'o_parentId'         => 1,
                'o_creationDate'     => time(),
                'o_userOwner'        => $this->getUserId(),
                'o_userModification' => $this->getUserId(),
                'o_key'              => 'BodyLocations',
                'o_published'        => true,
            ]);
        }

        if (!$bodylocations instanceof DataObject\Folder) {
            DataObject\Folder::create([
                'o_parentId'         => 1,
                'o_creationDate'     => time(),
                'o_userOwner'        => $this->getUserId(),
                'o_userModification' => $this->getUserId(),
                'o_key'              => 'Substances',
                'o_published'        => true,
            ]);
        }

        if (!$bodylocations instanceof DataObject\Folder) {
            DataObject\Folder::create([
                'o_parentId'         => 1,
                'o_creationDate'     => time(),
                'o_userOwner'        => $this->getUserId(),
                'o_userModification' => $this->getUserId(),
                'o_key'              => 'Tubes',
                'o_published'        => true,
            ]);
        }

        return true;
    }

    /**
     * @return array
     */
    protected function getClasses(): array
    {
        $result = [];
        foreach ($this->classes as $className) {
            $filename = sprintf('class_%s_export.json', $className);
            $path = realpath(dirname(__FILE__) . '/../Resources/install/classes') . '/' . $filename;
            $path = realpath($path);
            if (false === $path || !is_file($path)) {
                throw new \RuntimeException(sprintf(
                    'Class export for class "%s" was expected in "%s" but file does not exist',
                    $className, $path
                ));
            }
            $result[$className] = $path;
        }
        return $result;
    }
    /**
     * @return int
     */
    protected function getUserId()
    {
        $userId = 0;
        $user = $this->resolver->getUser();
        if ($user instanceof User) {
            $userId = $this->resolver->getUser()->getId();
        }
        return $userId;
    }
}
