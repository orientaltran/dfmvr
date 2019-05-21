<?php

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\Category;
use TCG\Voyager\Models\DataType;
use TCG\Voyager\Models\MenuItem;
use TCG\Voyager\Models\Page;
use TCG\Voyager\Models\Translation;

class TranslationsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        $this->dataTypesTranslations();
//        $this->categoriesTranslations();
        $this->pagesTranslations();
        $this->menusTranslations();
    }

    /**
     * Auto generate Categories Translations.
     *
     * @return void
     */
    private function categoriesTranslations()
    {
        // Adding translations for 'categories'
        //
        $cat = Category::where('slug', 'category-1')->firstOrFail();
        if ($cat->exists) {
            $this->trans('fr', $this->arr(['categories', 'slug'], $cat->id), 'categoria-1');
            $this->trans('fr', $this->arr(['categories', 'name'], $cat->id), 'Catégorie 1');
        }
        $cat = Category::where('slug', 'category-2')->firstOrFail();
        if ($cat->exists) {
            $this->trans('fr', $this->arr(['categories', 'slug'], $cat->id), 'categoria-2');
            $this->trans('fr', $this->arr(['categories', 'name'], $cat->id), 'Catégorie 2');
        }
    }

    /**
     * Auto generate DataTypes Translations.
     *
     * @return void
     */
    private function dataTypesTranslations()
    {
        // Adding translations for 'display_name_singular'
        //
        $_fld = 'display_name_singular';
        $_tpl = ['data_types', $_fld];
        /*$dtp = DataType::where($_fld, 'Post')->firstOrFail();
        if ($dtp->exists) {
            $this->trans('fr', $this->arr($_tpl, $dtp->id), 'Poster');
        }*/
        $dtp = DataType::where($_fld, 'Page')->firstOrFail();
        if ($dtp->exists) {
            $this->trans('fr', $this->arr($_tpl, $dtp->id), 'Page');
            $this->trans('vi', $this->arr($_tpl, $dtp->id), 'Trang');
        }
        $dtp = DataType::where($_fld, 'User')->firstOrFail();
        if ($dtp->exists) {
            $this->trans('fr', $this->arr($_tpl, $dtp->id), 'Utilisateur');
            $this->trans('vi', $this->arr($_tpl, $dtp->id), 'Người dùng');
        }
        /*$dtp = DataType::where($_fld, 'Category')->firstOrFail();
        if ($dtp->exists) {
            $this->trans('fr', $this->arr($_tpl, $dtp->id), 'Catégorie');
        }*/
        $dtp = DataType::where($_fld, 'Menu')->firstOrFail();
        if ($dtp->exists) {
            $this->trans('fr', $this->arr($_tpl, $dtp->id), 'Menu');
            $this->trans('vi', $this->arr($_tpl, $dtp->id), 'Thực đơn');
        }
        $dtp = DataType::where($_fld, 'Role')->firstOrFail();
        if ($dtp->exists) {
            $this->trans('fr', $this->arr($_tpl, $dtp->id), 'Rôle');
            $this->trans('vi', $this->arr($_tpl, $dtp->id), 'Vai trò');
        }
        $dtp = DataType::where($_fld, 'Project Category')->firstOrFail();
        if ($dtp->exists) {
            $this->trans('fr', $this->arr($_tpl, $dtp->id), 'Catégorie de projet');
            $this->trans('vi', $this->arr($_tpl, $dtp->id), 'Danh mục dự án');
        }
        $dtp = DataType::where($_fld, 'Project')->firstOrFail();
        if ($dtp->exists) {
            $this->trans('fr', $this->arr($_tpl, $dtp->id), 'Projet');
            $this->trans('vi', $this->arr($_tpl, $dtp->id), 'Dự án');
        }
        $dtp = DataType::where($_fld, 'News Category')->firstOrFail();
        if ($dtp->exists) {
            $this->trans('fr', $this->arr($_tpl, $dtp->id), 'Catégorie de actualités');
            $this->trans('vi', $this->arr($_tpl, $dtp->id), 'Danh mục tin tức');
        }
        $dtp = DataType::where($_fld, 'News')->firstOrFail();
        if ($dtp->exists) {
            $this->trans('fr', $this->arr($_tpl, $dtp->id), 'Actualités');
            $this->trans('vi', $this->arr($_tpl, $dtp->id), 'Tin tức');
        }
        $dtp = DataType::where($_fld, 'Service')->firstOrFail();
        if ($dtp->exists) {
            $this->trans('fr', $this->arr($_tpl, $dtp->id), 'Service');
            $this->trans('vi', $this->arr($_tpl, $dtp->id), 'Dịch vụ');
        }
        $dtp = DataType::where($_fld, 'Service Model')->firstOrFail();
        if ($dtp->exists) {
            $this->trans('fr', $this->arr($_tpl, $dtp->id), 'Modèle de service');
            $this->trans('vi', $this->arr($_tpl, $dtp->id), 'Mô hình dịch vụ');
        }

        // Adding translations for 'display_name_plural'
        //
        $_fld = 'display_name_plural';
        $_tpl = ['data_types', $_fld];
        /*$dtp = DataType::where($_fld, 'Posts')->firstOrFail();
        if ($dtp->exists) {
            $this->trans('fr', $this->arr($_tpl, $dtp->id), 'Postes');
        }*/
        $dtp = DataType::where($_fld, 'Pages')->firstOrFail();
        if ($dtp->exists) {
            $this->trans('fr', $this->arr($_tpl, $dtp->id), 'Pages');
            $this->trans('vi', $this->arr($_tpl, $dtp->id), 'Trang');
        }
        $dtp = DataType::where($_fld, 'Users')->firstOrFail();
        if ($dtp->exists) {
            $this->trans('fr', $this->arr($_tpl, $dtp->id), 'Utilisateurs');
            $this->trans('vi', $this->arr($_tpl, $dtp->id), 'Người dùng');
        }
        /*$dtp = DataType::where($_fld, 'Categories')->firstOrFail();
        if ($dtp->exists) {
            $this->trans('fr', $this->arr($_tpl, $dtp->id), 'Catégories');
        }*/
        $dtp = DataType::where($_fld, 'Menus')->firstOrFail();
        if ($dtp->exists) {
            $this->trans('fr', $this->arr($_tpl, $dtp->id), 'Menus');
            $this->trans('vi', $this->arr($_tpl, $dtp->id), 'Thực đơn');
        }
        $dtp = DataType::where($_fld, 'Roles')->firstOrFail();
        if ($dtp->exists) {
            $this->trans('fr', $this->arr($_tpl, $dtp->id), 'Rôles');
            $this->trans('vi', $this->arr($_tpl, $dtp->id), 'Vai trò');
        }
        $dtp = DataType::where($_fld, 'Project Categories')->firstOrFail();
        if ($dtp->exists) {
            $this->trans('fr', $this->arr($_tpl, $dtp->id), 'Catégories de projets');
            $this->trans('vi', $this->arr($_tpl, $dtp->id), 'Danh mục dự án');
        }
        $dtp = DataType::where($_fld, 'Projects')->firstOrFail();
        if ($dtp->exists) {
            $this->trans('fr', $this->arr($_tpl, $dtp->id), 'Projets');
            $this->trans('vi', $this->arr($_tpl, $dtp->id), 'Dự án');
        }
        $dtp = DataType::where($_fld, 'News Categories')->firstOrFail();
        if ($dtp->exists) {
            $this->trans('fr', $this->arr($_tpl, $dtp->id), 'Catégories de actualités');
            $this->trans('vi', $this->arr($_tpl, $dtp->id), 'Danh mục tin tức');
        }
        $dtp = DataType::where($_fld, 'News')->firstOrFail();
        if ($dtp->exists) {
            $this->trans('fr', $this->arr($_tpl, $dtp->id), 'Actualités');
            $this->trans('vi', $this->arr($_tpl, $dtp->id), 'Tin tức');
        }
        $dtp = DataType::where($_fld, 'Services')->firstOrFail();
        if ($dtp->exists) {
            $this->trans('fr', $this->arr($_tpl, $dtp->id), 'Services');
            $this->trans('vi', $this->arr($_tpl, $dtp->id), 'Dịch vụ');
        }
        $dtp = DataType::where($_fld, 'Service Models')->firstOrFail();
        if ($dtp->exists) {
            $this->trans('fr', $this->arr($_tpl, $dtp->id), 'Modèles de service');
            $this->trans('vi', $this->arr($_tpl, $dtp->id), 'Mô hình dịch vụ');
        }
    }

    /**
     * Auto generate Pages Translations.
     *
     * @return void
     */
    private function pagesTranslations()
    {
        $page = Page::where('slug', 'hello-world')->firstOrFail();
        if ($page->exists) {
            $_arr = $this->arr(['pages', 'title'], $page->id);
            $this->trans('fr', $_arr, 'Olá Mundo');
            $this->trans('vi', $_arr, 'Xin chào thế giới');
            /**
             * For configuring additional languages use it e.g.
             *
             * ```
             *   $this->trans('es', $_arr, 'hola-mundo');
             *   $this->trans('de', $_arr, 'hallo-welt');
             * ```
             */
            $_arr = $this->arr(['pages', 'slug'], $page->id);
            $this->trans('fr', $_arr, 'ola-mundo');
            $this->trans('vi', $_arr, 'xin-chao-the-gioi');

            $_arr = $this->arr(['pages', 'body'], $page->id);
            $this->trans('fr', $_arr, '<p>Olá Mundo. Scallywag grog swab Cat o\'nine tails scuttle rigging hardtack cable nipper Yellow Jack. Handsomely spirits knave lad killick landlubber or just lubber deadlights chantey pinnace crack Jennys tea cup. Provost long clothes black spot Yellow Jack bilged on her anchor league lateen sail case shot lee tackle.</p>'
                                        ."\r\n".'<p>Ballast spirits fluke topmast me quarterdeck schooner landlubber or just lubber gabion belaying pin. Pinnace stern galleon starboard warp carouser to go on account dance the hempen jig jolly boat measured fer yer chains. Man-of-war fire in the hole nipperkin handsomely doubloon barkadeer Brethren of the Coast gibbet driver squiffy.</p>');
        }
    }

    /**
     * Auto generate Menus Translations.
     *
     * @return void
     */
    private function menusTranslations()
    {
        $_tpl = ['menu_items', 'title'];
        $_item = $this->findMenuItem('Dashboard');
        if ($_item->exists) {
            $this->trans('fr', $this->arr($_tpl, $_item->id), 'Tableau de bord');
            $this->trans('vi', $this->arr($_tpl, $_item->id), 'Bảng điều khiển');
        }

        $_item = $this->findMenuItem('Media');
        if ($_item->exists) {
            $this->trans('fr', $this->arr($_tpl, $_item->id), 'Médias');
            $this->trans('vi', $this->arr($_tpl, $_item->id), 'Đa phương tiện');
        }

        /*$_item = $this->findMenuItem('Posts');
        if ($_item->exists) {
            $this->trans('fr', $this->arr($_tpl, $_item->id), 'Postes');
        }*/

        $_item = $this->findMenuItem('Users');
        if ($_item->exists) {
            $this->trans('fr', $this->arr($_tpl, $_item->id), 'Utilisateurs');
            $this->trans('vi', $this->arr($_tpl, $_item->id), 'Người dùng');
        }

        $_items = $this->findMenuItems('Categories');
        foreach ($_items as $_item) {
            if ($_item->exists) {
                $this->trans('fr', $this->arr($_tpl, $_item->id), 'Catégories');
                $this->trans('vi', $this->arr($_tpl, $_item->id), 'Danh mục');
            }
        }

        $_item = $this->findMenuItem('Pages');
        if ($_item->exists) {
            $this->trans('fr', $this->arr($_tpl, $_item->id), 'Pages');
            $this->trans('vi', $this->arr($_tpl, $_item->id), 'Trang');
        }

        $_item = $this->findMenuItem('Roles');
        if ($_item->exists) {
            $this->trans('fr', $this->arr($_tpl, $_item->id), 'Rôles');
            $this->trans('vi', $this->arr($_tpl, $_item->id), 'Vai trò');
        }

        $_item = $this->findMenuItem('Tools');
        if ($_item->exists) {
            $this->trans('fr', $this->arr($_tpl, $_item->id), 'Outils');
            $this->trans('vi', $this->arr($_tpl, $_item->id), 'Công cụ');
        }

        $_item = $this->findMenuItem('Menu Builder');
        if ($_item->exists) {
            $this->trans('fr', $this->arr($_tpl, $_item->id), 'Menus');
            $this->trans('vi', $this->arr($_tpl, $_item->id), 'Thực đơn');
        }

        $_item = $this->findMenuItem('Database');
        if ($_item->exists) {
            $this->trans('fr', $this->arr($_tpl, $_item->id), 'Base de données');
            $this->trans('vi', $this->arr($_tpl, $_item->id), 'Cơ sở dữ liệu');
        }

        $_item = $this->findMenuItem('Settings');
        if ($_item->exists) {
            $this->trans('fr', $this->arr($_tpl, $_item->id), 'Réglages');
            $this->trans('vi', $this->arr($_tpl, $_item->id), 'Cài đặt');
        }

        $_item = $this->findMenuItem('Projects');
        if ($_item->exists) {
            $this->trans('fr', $this->arr($_tpl, $_item->id), 'Projets');
            $this->trans('vi', $this->arr($_tpl, $_item->id), 'Dự án');
        }

        $_item = $this->findMenuItem('News');
        if ($_item->exists) {
            $this->trans('fr', $this->arr($_tpl, $_item->id), 'Actualités');
            $this->trans('vi', $this->arr($_tpl, $_item->id), 'Tin tức');
        }

        $_item = $this->findMenuItem('Services');
        if ($_item->exists) {
            $this->trans('fr', $this->arr($_tpl, $_item->id), 'Services');
            $this->trans('vi', $this->arr($_tpl, $_item->id), 'Dịch vụ');
        }

        $_item = $this->findMenuItem('Models');
        if ($_item->exists) {
            $this->trans('fr', $this->arr($_tpl, $_item->id), 'Modèles');
            $this->trans('vi', $this->arr($_tpl, $_item->id), 'Mô hình');
        }

        $_items = $this->findMenuItems('List');
        foreach ($_items as $_item) {
            if ($_item->exists) {
                $this->trans('fr', $this->arr($_tpl, $_item->id), 'Liste');
                $this->trans('vi', $this->arr($_tpl, $_item->id), 'Danh sách');
            }
        }
    }

    private function findMenuItem($title)
    {
        return MenuItem::where('title', $title)->firstOrFail();
    }

    private function findMenuItems($title)
    {
        return MenuItem::where('title', $title)->get();
    }

    private function arr($par, $id)
    {
        return [
            'table_name'  => $par[0],
            'column_name' => $par[1],
            'foreign_key' => $id,
        ];
    }

    private function trans($lang, $keys, $value)
    {
        $_t = Translation::firstOrNew(array_merge($keys, [
            'locale' => $lang,
        ]));

        if (!$_t->exists) {
            $_t->fill(array_merge(
                $keys,
                ['value' => $value]
            ))->save();
        }
    }
}
