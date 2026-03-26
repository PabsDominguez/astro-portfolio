import { THEME_COLORS } from "@/lib/constants"

/** Apply theme classes and update meta theme-color */
function applyTheme() {
  const theme = localStorage.theme ?? "dark"
  document.documentElement.classList.toggle("dark", theme === "dark")
  document.documentElement.classList.toggle("crt", theme === "crt")
  updateThemeColor(theme)
}

/** Update the theme-color meta tag */
function updateThemeColor(theme: string) {
  const themeColor = theme === "crt" ? THEME_COLORS.crt : theme === "dark" ? THEME_COLORS.dark : THEME_COLORS.light
  let meta = document.querySelector('meta[name="theme-color"]')
  if (!meta) {
    meta = document.createElement("meta")
    meta.setAttribute("name", "theme-color")
    document.head.appendChild(meta)
  }
  meta.setAttribute("content", themeColor)
}

/** Sync toggle aria label with current theme */
function syncToggleState() {
  const theme = localStorage.theme ?? "dark"
  const toggle = document.getElementById("theme-toggle")
  if (!toggle) return
  const labels: Record<string, string> = {
    dark: "Switch to CRT mode",
    crt: "Switch to light mode",
    light: "Switch to dark mode",
  }
  toggle.setAttribute("aria-label", labels[theme] ?? "Toggle theme")
}

/** Initialize all theme functionality */
export function initTheme() {
  applyTheme()
  syncToggleState()
  initThemeToggle()
}

/** Initialize theme toggle click handler */
function initThemeToggle() {
  const toggle = document.getElementById("theme-toggle")
  if (!toggle) return
  if (toggle.dataset.themeToggleBound === "true") return
  toggle.dataset.themeToggleBound = "true"

  toggle.addEventListener("click", () => {
    const current = localStorage.theme ?? "dark"
    const next = current === "dark" ? "crt" : current === "crt" ? "light" : "dark"
    localStorage.theme = next
    applyTheme()
    syncToggleState()
  })
}
