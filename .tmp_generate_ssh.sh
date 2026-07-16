#!/usr/bin/env bash
set -e
mkdir -p ~/.ssh
chmod 700 ~/.ssh
EMAIL=$(git config user.email || echo "user@example.com")
echo "Using email: $EMAIL"
if [ ! -f ~/.ssh/id_ed25519.pub ]; then
  ssh-keygen -t ed25519 -C "$EMAIL" -f ~/.ssh/id_ed25519 -N "" -q
fi
# start ssh-agent if available
if command -v ssh-agent >/dev/null 2>&1; then
  eval "$(ssh-agent -s)" >/dev/null 2>&1 || true
fi
ssh-add ~/.ssh/id_ed25519 >/dev/null 2>&1 || true

echo "--- public key ---"
cat ~/.ssh/id_ed25519.pub || echo "no pub"
