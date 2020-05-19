<?php

declare(strict_types=1);

namespace PackageVersions;

use OutOfBoundsException;

/**
 * This class is generated by ocramius/package-versions, specifically by
 * @see \PackageVersions\Installer
 *
 * This file is overwritten at every run of `composer install` or `composer update`.
 */
final class Versions
{
    public const ROOT_PACKAGE_NAME = '__root__';
    /**
     * Array of all available composer packages.
     * Dont read this array from your calling code, but use the \PackageVersions\Versions::getVersion() method instead.
     *
     * @var array<string, string>
     * @internal
     */
    public const VERSIONS          = array (
  'altorouter/altorouter' => 'v1.2.0@39c50092470128c12284d332bb57f306bb5b58e4',
  'aristath/kirki' => 'v3.1.2@e61ae5f77f1685d371d8fc4636579bed2a9f8704',
  'asm89/twig-cache-extension' => '1.4.0@13787226956ec766f4770722082288097aebaaf3',
  'composer/installers' => 'v1.9.0@b93bcf0fa1fccb0b7d176b0967d969691cd74cca',
  'doctrine/inflector' => '2.0.1@18b995743e7ec8b15fd6efc594f0fa3de4bfe6d7',
  'dusank/knapsack' => '10.0.0@cc29a0bbaadbfcb958b98aa4fd69a4ad7d173bba',
  'htmlburger/carbon-fields' => 'v3.1.20@0688b493efcf97aab9f540d399813e1392fe30cd',
  'illuminate/contracts' => 'v7.11.0@5681c90368ffafaaa2e12c42112e344281466f23',
  'illuminate/support' => 'v7.11.0@5458d0d0048f185b3d4a911e5d21d2bb2fb336ca',
  'jeremeamia/superclosure' => '2.4.0@5707d5821b30b9a07acfb4d76949784aaa0e9ce9',
  'jjgrainger/posttypes' => '2.1@a87584606e9ef726f7621c1d71a184fdf7282172',
  'laravel/helpers' => 'v1.2.0@1f978fc5dad9f7f906b18242c654252615201de4',
  'monolog/monolog' => '2.0.2@c861fcba2ca29404dc9e617eedd9eff4616986b8',
  'nesbot/carbon' => '2.34.0@52ea68aebbad8a3b27b5d24e4c66ebe1933f8399',
  'nikic/php-parser' => 'v4.4.0@bd43ec7152eaaab3bd8c6d0aa95ceeb1df8ee120',
  'php-di/invoker' => '2.0.0@540c27c86f663e20fe39a24cd72fa76cdb21d41a',
  'php-di/php-di' => '6.1.0@69238bd49acc0eb6a967029311eeadc3f7c5d538',
  'php-di/phpdoc-reader' => '2.1.1@15678f7451c020226807f520efb867ad26fbbfcf',
  'phpoption/phpoption' => '1.7.3@4acfd6a4b33a509d8c88f50e5222f734b6aeebae',
  'psr/container' => '1.0.0@b7ce3b176482dbbc1245ebf52b181af44c2cf55f',
  'psr/log' => '1.1.3@0f73288fd15629204f9d42b7055f72dacbe811fc',
  'psr/simple-cache' => '1.0.1@408d5eafb83c57f6365a3ca330ff23aa4a5fa39b',
  'symfony/http-foundation' => 'v5.0.8@e47fdf8b24edc12022ba52923150ec6484d7f57d',
  'symfony/mime' => 'v5.0.8@5d6c81c39225a750f3f43bee15f03093fb9aaa0b',
  'symfony/polyfill-ctype' => 'v1.17.0@e94c8b1bbe2bc77507a1056cdb06451c75b427f9',
  'symfony/polyfill-intl-idn' => 'v1.17.0@3bff59ea7047e925be6b7f2059d60af31bb46d6a',
  'symfony/polyfill-mbstring' => 'v1.17.0@fa79b11539418b02fc5e1897267673ba2c19419c',
  'symfony/polyfill-php56' => 'v1.17.0@e3c8c138280cdfe4b81488441555583aa1984e23',
  'symfony/polyfill-php72' => 'v1.17.0@f048e612a3905f34931127360bdd2def19a5e582',
  'symfony/polyfill-util' => 'v1.17.0@4afb4110fc037752cf0ce9869f9ab8162c4e20d7',
  'symfony/translation' => 'v5.0.8@c3879db7a68fe3e12b41263b05879412c87b27fd',
  'symfony/translation-contracts' => 'v2.0.1@8cc682ac458d75557203b2f2f14b0b92e1c744ed',
  'timber/timber' => '1.16.0@cdae62c0108cd60c256e9bb00d634645eb0127c0',
  'twig/twig' => 'v2.12.5@18772e0190734944277ee97a02a9a6c6555fcd94',
  'upstatement/routes' => '0.5@3267d28be0a73f197087d58384e1a358d85671b6',
  'vlucas/phpdotenv' => 'v4.1.5@539bb6927c101a5605d31d11a2d17185a2ce2bf1',
  'voku/portable-ascii' => '1.4.10@240e93829a5f985fab0984a6e55ae5e26b78a334',
  'yahnis-elsts/plugin-update-checker' => 'v4.9@28f29c940cc22754aff85a99645e3c0a51c097e8',
  'amphp/amp' => 'v2.4.4@1e58d53e4af390efc7813e36cd215bd82cba4b06',
  'amphp/byte-stream' => 'v1.7.3@b867505edb79dda8f253ca3c3a2bbadae4b16592',
  'composer/semver' => '1.5.1@c6bea70230ef4dd483e6bbcab6005f682ed3a8de',
  'composer/xdebug-handler' => '1.4.1@1ab9842d69e64fb3a01be6b656501032d1b78cb7',
  'felixfbecker/advanced-json-rpc' => 'v3.1.1@0ed363f8de17d284d479ec813c9ad3f6834b5c40',
  'felixfbecker/language-server-protocol' => 'v1.4.0@378801f6139bb74ac215d81cca1272af61df9a9f',
  'johnpbloch/wordpress' => '5.4.1@2cdacd2a14c9960bcd86d8b4d7b1f211b3e77684',
  'johnpbloch/wordpress-core' => '5.4.1@4639993365dbb3c935d420df22f84c136d9ef4d1',
  'johnpbloch/wordpress-core-installer' => '1.0.2@fd12f5cfe27223b92b0f4bbc097059eb23cc56c4',
  'netresearch/jsonmapper' => 'v2.1.0@e0f1e33a71587aca81be5cffbb9746510e1fe04e',
  'ocramius/package-versions' => '1.8.0@421679846270a5772534828013a93be709fb13df',
  'openlss/lib-array2xml' => '1.0.0@a91f18a8dfc69ffabe5f9b068bc39bb202c81d90',
  'phpdocumentor/reflection-common' => '2.1.0@6568f4687e5b41b054365f9ae03fcb1ed5f2069b',
  'phpdocumentor/reflection-docblock' => '5.1.0@cd72d394ca794d3466a3b2fc09d5a6c1dc86b47e',
  'phpdocumentor/type-resolver' => '1.1.0@7462d5f123dfc080dfdf26897032a6513644fc95',
  'roave/security-advisories' => 'dev-master@885e8b1e0bc2096989fd20938342e407e8045186',
  'sebastian/diff' => '4.0.1@3e523c576f29dacecff309f35e4cc5a5c168e78a',
  'symfony/console' => 'v5.0.8@5fa1caadc8cdaa17bcfb25219f3b53fe294a9935',
  'symfony/polyfill-php73' => 'v1.17.0@a760d8964ff79ab9bf057613a5808284ec852ccc',
  'symfony/service-contracts' => 'v2.0.1@144c5e51266b281231e947b51223ba14acf1a749',
  'vimeo/psalm' => '3.11.4@58e1d8e68e5098bf4fbfdfb420c38d563f882549',
  'webmozart/assert' => '1.8.0@ab2cb0b3b559010b75981b1bdce728da3ee90ad6',
  'webmozart/glob' => '4.1.0@3cbf63d4973cf9d780b93d2da8eec7e4a9e63bbe',
  'webmozart/path-util' => '2.3.0@d939f7edc24c9a1bb9c0dee5cb05d8e859490725',
  '__root__' => 'dev-master@81789e4d79692f8b4f4d42939dabb1621637b0b3',
);

    private function __construct()
    {
    }

    /**
     * @throws OutOfBoundsException If a version cannot be located.
     *
     * @psalm-param key-of<self::VERSIONS> $packageName
     * @psalm-pure
     */
    public static function getVersion(string $packageName) : string
    {
        if (isset(self::VERSIONS[$packageName])) {
            return self::VERSIONS[$packageName];
        }

        throw new OutOfBoundsException(
            'Required package "' . $packageName . '" is not installed: check your ./vendor/composer/installed.json and/or ./composer.lock files'
        );
    }
}
