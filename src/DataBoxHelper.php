<?php

namespace Defr\CzechDataBox;

use function realpath;

/**
 * Class DataBoxHelper
 */
class DataBoxHelper
{
    // Typy WS operací dle manuálu.
    /**
     * @var int
     */
    public const OPERATIONS_WS = 0;

    /**
     * @var int
     */
    public const INFO_WS = 1;

    /**
     * @var int
     */
    public const SEARCH_WS = 2;

    /**
     * @var int
     */
    public const ACCESS_WS = 3;

    /**
     * @var int
     */
    public const STAT_WS = 4;

    /**
     * @var int
     */
    public const VODZ_WS = 5;

    /**
     * Vrátí seznam všech WS včetně umístění WSDL souboru.
     *
     * @return array
     */
    public static function getServiceWSDLList()
    {
        $directory = __DIR__.'/../Resources/';

        return [
            self::OPERATIONS_WS => realpath($directory.'dm_operations.wsdl'),
            self::INFO_WS       => realpath($directory.'dm_info.wsdl'),
            self::SEARCH_WS     => realpath($directory.'db_search.wsdl'),
            self::ACCESS_WS     => realpath($directory.'db_access.wsdl'),
            self::STAT_WS       => realpath($directory.'isds_stat.wsdl'),
            self::VODZ_WS       => realpath($directory.'dm_VoDZ.wsdl'),
        ];
    }


    /**
     * Prelouska hnusny nazev klice a vrati pekny, cesky.
     *
     * @param $key
     *
     * @return mixed
     */
    public static function getKeyName($key)
    {
        $replaces = [
            'dbID'                   => 'ID datové schránky',
            'dbType'                 => 'Typ datové schránky',
            'ic'                     => 'IČ',
            'pnFirstName'            => 'Křestní jméno',
            'pnMiddleName'           => 'Prostřední jméno',
            'pnLastName'             => 'Příjmení',
            'pnLastNameAtBirth'      => 'Rodné příjmení',
            'firmName'               => 'Název společnosti',
            'biDate'                 => 'Datum narození',
            'biCity'                 => 'Místo narození',
            'biCounty'               => 'Země narození',
            'biState'                => 'Stát narození',
            'adCity'                 => 'Město',
            'adStreet'               => 'Ulice',
            'adNumberInStreet'       => 'Číslo orientační',
            'adNumberInMunicipality' => 'Číslo popisné',
            'adZipCode'              => 'PSČ',
            'adState'                => 'Stát',
            'nationality'            => 'Státní příslušnost',
            'identifier'             => 'Identifikátor',
            'dbState'                => 'Stát',
            'userID'                 => 'ID osoby',
            'userType'               => 'Typ uživatele',
            'userPrivils'            => 'Oprávnění',
        ];

        return $replaces[$key] ?? $key;
    }


    /**
     * Typy datových schránek.
     *
     * @return array
     */
    public static function getDataBoxTypes()
    {
        return [
            "FO"         => 'Fyzická osoba',
            "PFO"        => 'Podnikající fyzická osoba',
            "PFO_ADVOK"  => 'Advokát',
            "PFO_DANPOR" => 'Daňový poradce',
            "PFO_INSSPR" => 'Insolvenční správce',
            "PO"         => 'Právnická osoba',
            "PO_ZAK"     => 'PO_ZAK',
            "PO_REQ"     => 'PO_REQ',
            "OVM"        => 'Orgán veřejné moci',
            "OVM_NOTAR"  => 'Notář',
            "OVM_EXEKUT" => 'Exekutor',
            "OVM_REQ"    => 'OVM_REQ',
        ];
    }


    /**
     * Typy datových zpráv.
     *
     * @return array
     */
    public static function getMessagesTypes()
    {
        return [
            "recieved"     => 'Přijatá zpráva',
            "sent"         => 'Odeslaná zpráva',
            "confirmation" => 'Doručenka',
        ];
    }


    /**
     * Vysvětlivky stavů datových zpráv.
     *
     * @return array
     */
    public static function getDataBoxMessagesStatesNotes()
    {
        return [
            1  => 'Zpráva byla podána (vznikla v ISDS)',
            2  => 'Datová zpráva včetně písemností podepsána časovým razítkem',
            3  => 'Zpráva neprošla AV kontrolou; nakažená písemnost je smazána; konečný stav zprávy před smazáním',
            4  => 'Zpráva dodána do ISDS (zapsán čas dodání)',
            5  => 'Uplynulo 10 dní od dodání veřejné zprávy, která dosud nebyla doručena přihlášením (předpoklad doručení fikcí u neOVM DS); u komerční zprávy nemůže tento stav nastat',
            6  => 'Osoba oprávněná číst tuto zprávu se přihlásila - dodaná zpráva byla doručena',
            7  => 'Zpráva byla přečtena (na portále nebo akcí ESS)',
            8  => 'Zpráva byla označena jako nedoručitelná, protože DS adresáta byla zpětně znepřístupněna',
            9  => 'Obsah zprávy byl smazán, obálka zprávy včetně hashů přesunuta do archivu',
            10 => 'Zpráva je v Datovém trezoru',
        ];
    }


    /**
     * Stavy datových zpráv.
     *
     * @return array
     */
    public static function getDataBoxMessagesStates()
    {
        return [
            1  => 'Podáno',
            2  => 'Odeslána',
            3  => 'Chyba - vir',
            4  => 'Dodána',
            5  => 'Doručeno fikcí',
            6  => 'Doručeno',
            7  => 'Přečteno',
            8  => 'Nedoručitelné',
            9  => 'Smazáno',
            10 => 'Datový trezor',
        ];
    }
}
