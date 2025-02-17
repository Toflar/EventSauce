---
permalink: /docs/
title: Event sourcing for PHP
hide_title: true
---

<div class="text-center mb-8 w-full">
    <img id="logo" src="/static/logo.svg" height="150px" width="150px" alt="EventSauce">
    <h1 class="text-grey-darkest mt-1">
        Event<span class="text-red">Sauce</span>
    </h1>
</div>

[![Source Code](https://img.shields.io/badge/source-eventsaucephp/eventsauce-blue.svg?style=flat-square)](https://github.com/eventsaucephp/eventsauce)
[![Code Quality](https://img.shields.io/scrutinizer/g/EventSaucePHP/EventSauce.svg?style=flat-square)](https://scrutinizer-ci.com/g/EventSaucePHP/EventSauce/?branch=master)
[![Code Coverage](https://img.shields.io/scrutinizer/coverage/g/EventSaucePHP/EventSauce.svg?style=flat-square)](https://scrutinizer-ci.com/g/EventSaucePHP/EventSauce/?branch=master)
[![Github Actions](https://github.com/EventSaucePHP/EventSauce/workflows/Tests/badge.svg)](https://github.com/EventSaucePHP/EventSauce/actions)
[![Packagist Version](https://img.shields.io/packagist/v/eventsauce/eventsauce.svg?style=flat-square)](https://packagist.org/packages/eventsauce/eventsauce)
[![Packagist](https://img.shields.io/badge/packagist-eventsauce/eventsauce-orange.svg?style=flat-square)](https://packagist.org/packages/eventsauce/eventsauce)
![php >=7.2](https://img.shields.io/packagist/php-v/eventsauce/eventsauce.svg?style=flat-square)

# What is EventSauce?

EventSauce is a library for event sourcing in PHP. The library provides a clear implementation
to get you started quickly and reliably. Event sourcing is a fundamentally different
approach to modeling software. The technique is well suited to model complex business flows
and transactional processes. Tackling complexity at scale works well with event sourcing
since the technique is based on communication.

EventSauce is a no-nonsense event sourcing library for PHP with a focus on developer
experience and productivity. This library was developed with the idea that you should
remain in control of . No application-wide rewrites and no big investments upfront.

## You are in control

Event sourcing is a tool to build a domain model. You own the model, and you own the
tooling. EventSauce is as much an implementation reference, as it is a library. You
can use it in your application, but you can also copy it and take full control.

## Extensible by design

The core is built around a set of (tiny) interfaces, which gives you the freedom to choose
the tools that meet your requirements. Implement them however you deem fit. EventSauce
was built favoring composition (not inheritance), this allows it to be composed in whatever
way is suitable for your project.

Many parts of the library are extremely pragmatic in nature. You're encouraged to take
control over it. It allows everything from custom storage adapter to highly customizable
message dispatching setups.

## Focus on event sourcing

EventSauce puts the focus on event sourcing, not on things _around_ event
sourcing. It does not require you to follow CQRS patterns (although you can). It does
not require you to use a command-, event-, or query-bus. By doing so, it allows
developers to use event sourcing for parts of their application more easily.

## A paradigm shift

Solving problems using event sourcing requires a very different mindset when compared
to common object-oriented software modeling in PHP. It's less focused about state and more
about processes, transitions, and communication in general. Event sourcing is also not
simple. It's built on a body of knowledge that is inherently complex. There are many
concepts that come into play that build off one another.

However, event sourcing also provides an easier way to model a variety of issues. It's
a remedy against storing "work in progress" entities. It's a better fit when modeling
anything where the transition is just as important as the end result.
