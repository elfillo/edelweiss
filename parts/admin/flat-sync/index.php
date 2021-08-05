<?php
include 'post_types.php';
class FlatSync
{
    const STORE_FILE_PATH = __DIR__ . '/flats.json';
    private $lastUpdateTime; 
    private $isFirstVisit; 
    public function __construct()
    {
        $this->lastUpdateTime = 
        file_exists (self::STORE_FILE_PATH) ? date ("d M Y", filemtime(self::STORE_FILE_PATH)) : null;
        if(file_exists (self::STORE_FILE_PATH) && filesize(self::STORE_FILE_PATH) !== 0){
            $this->isFirstVisit = false;
        }else{
            $this->isFirstVisit = true;
        }
        
        add_action('admin_menu', array($this, 'add_sync_page'));
    }

    /**
     * Add sync page
     */
    public function add_sync_page()
    {
        add_options_page(
            'Синхронизация данных',
            'Синхронизация данных',
            'manage_options',
            'sync-flat-data',
            array($this, 'create_sync_page')
        );
    }

    public function create_sync_page()
    {
?>    
        <?php $initAction = get_theme_file_uri('flat-sync/init.php'); ?>
        <?php $updateAction = get_theme_file_uri('flat-sync/sync.php'); ?>
        <?php if($this->isFirstVisit):?>
        <div class="wrap">
            <h1>Первоначальный парсинг</h1>
            <form method="get" action="<?php echo $initAction ?>">
                <?php submit_button('Спарсить квартиры из таблицы'); ?>
            </form>
        </div>
        <?php endif;?>
        <div class="wrap">
            <h1>Обновление данных*</h1>
            <p>*Дата последнего обновления: <br/><?php echo $this->lastUpdateTime?></p>
            <form method="post" action="<?php echo $updateAction ?>">
                <?php submit_button('Обновить данные о квартирах'); ?>
            </form>
        </div>
<?php
    }
}

if (is_admin())  new FlatSync();