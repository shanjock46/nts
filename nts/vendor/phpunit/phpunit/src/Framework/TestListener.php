<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\Framework;

/**
 * @deprecated Use the `TestHook` interfaces instead
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
interface TestListener
{
    /**
     * An error occurred.
     */
    public function addError(Test $test, \Throwable $t, float $time): void;

    /**
     * A warning occurred.
     */
    public function addWarning(Test $test, Warning $e, float $time): void;

    /**
     * A failure occurred.
     */
    public function addFailure(Test $test, AssertionFailedError $e, float $time): void;

    /**
     * Incomplete tests.
     */
    public function addIncompleteTest(Test $test, \Throwable $t, float $time): void;

    /**
     * Risky tests.
     */
    public function addRiskyTest(Test $test, \Throwable $t, float $time): void;

    /**
     * Skipped tests.
     */
    public function addSkippedTest(Test $test, \Throwable $t, float $time): void;

    /**
     * A tests suite started.
     */
    public function startTestSuite(TestSuite $suite): void;

    /**
     * A tests suite ended.
     */
    public function endTestSuite(TestSuite $suite): void;

    /**
     * A tests started.
     */
    public function startTest(Test $test): void;

    /**
     * A tests ended.
     */
    public function endTest(Test $test, float $time): void;
}
