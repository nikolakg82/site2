<?php

class Cadmin extends Ccadmin
{
    public function run()
    {
        self::$controllers = FM::includer(APP_CONFIG_ADMIN . 'controller.php');
        $arrChapters = FM::includer(APP_CONFIG_ADMIN . 'chapter.php');

        if(FM::is_variable($arrChapters))
        {
            foreach($arrChapters as $strChapterName => $arrChapterData)
            {
                if(FM::is_variable($arrChapterData))
                {
                    foreach($arrChapterData['tables'] as $strController)
                    {
                        if(FM::is_variable(CregistryController::get_controllers($strController)) && isset(self::$controllers[$strController]))
                            CregistryAdmin::add_controller($strChapterName, $arrChapterData['icon'], $strController, self::$controllers[$strController]);
                    }
                }
            }
        }

        $this->work();
    }
}