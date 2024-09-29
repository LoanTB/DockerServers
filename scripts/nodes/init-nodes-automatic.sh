#!/bin/bash
set -e

JOIN_COMMAND=$(nc 10.99.1.1 12345)
eval "$JOIN_COMMAND"

